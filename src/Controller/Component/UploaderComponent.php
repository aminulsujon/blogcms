<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\Event\Event;

class UploaderComponent extends Component {
	
	/*
	 * file uplaoder
	 */
    public function uploadFile($fileCtrl, $fileName, $cat, $oldFile = null) {
    	$maxfilesize = 200000000000;
		$dir_path = $this->getUploadDir ( $cat );
		
		$name = $fileName . "." . $this->getFileExtension ( $fileCtrl );
		if ($fileName && $fileCtrl ['tmp_name'] && $fileCtrl ['size'] < $maxfilesize) {
			if ($oldFile) {
				if (fileExistsInPath ( $dir_path . $oldFile )) {
					unlink ( $dir_path . $oldFile );
				}
			}
			
			move_uploaded_file ( $fileCtrl ['tmp_name'], $dir_path . $name );
			
			return $name;
		} else {
			die ( "File size has exceeded the limit. Maximum: " . $maxfilesize . " bytes can be allowed." );
		}
	}
	
	/*
	 * image uplaoder
	 */
	public function uploadImage($fileCtrl, $imgName, $cat = '', $h = '', $w = '',$pextension = '') {
		$maxfilesize = 200000000000;
		$dir_path = $this->getUploadDir ( $cat );
		if ($imgName && $fileCtrl ['tmp_name'] && $fileCtrl ['size'] < $maxfilesize) {
			if(!empty($pextension)){
				$name = $imgName . ".". $pextension;
			}else{
				$name = $imgName . ".png";
			}
			
			if (file_exists ( $dir_path . $name )) {
				unlink ( $dir_path . $name );
			}
			return $this->uploadResizeImage ( $fileCtrl, $name, $cat, $h, $w,$pextension );
		} else {
			return "File size has exceeded the limit. Maximum: " . $maxfilesize . " bytes can be allowed.";
		}
	}
	/*
	 * image resizer 
	 * @ call in uplodImage()
	 */
	private function uploadResizeImage($fileCtrl, $name, $cat = '', $h = '', $w = '', $pextension = null) {
		$path = $this->getUploadDir ( $cat ) . $name;
		
		if ($h && $w) {
			$new_w = $w;
			$new_h = $h;
		} else {
			list ( $width, $height ) = getimagesize ( $fileCtrl ['tmp_name'] );
			
			if ($h && empty ( $w )) {
				$new_w = $width * ($h / $height);
				$new_h = $h;
			} elseif ($w && empty ( $h )) {
				$new_w = $w;
				$new_h = $height * ($w / $width);
			} else {
				$new_w = $width;
				$new_h = $height;
			}
		}
		if(!empty($pextension)){
			$img_T = IMAGETYPE_JPEG;
		}else{
			$img_T = IMAGETYPE_PNG;
		}
		return $this->smartResize ( $fileCtrl, $path, $img_T, $new_w, $new_h );
	}
	
	/*
	 * image resizer with given dimension
	 * @ called in uploadResizeImage
	 */
	private function smartResize($fileCtrl, $newFile, $outType, $width, $height, $output = 'file') {
		if ($height <= 0 && $width <= 0) {
			return "Height or Width required";
		}
		
		# Setting defaults and meta
		$file = $fileCtrl ['tmp_name'];
		$info = getimagesize ( $file );
		list ( $width_old, $height_old ) = $info;
		
		# Loading image to memory according to type
		switch ($info [2]) {
			case IMAGETYPE_GIF :
				$image = imagecreatefromgif ( $file );
				break;
			case IMAGETYPE_JPEG :
				$image = imagecreatefromjpeg ( $file );
				break;
			case IMAGETYPE_PNG :
				$image = imagecreatefrompng ( $file );
				break;
			default :
				$image = '';
				return false;
		}
		
		# This is the resizing/resampling/transparency-preserving magic
		$image_resized = imagecreatetruecolor ( $width, $height );
		if ($info [2] == IMAGETYPE_GIF) {
			$transparency = imagecolortransparent ( $image );
			if ($transparency >= 0) {
				$trnprt_color = imagecolorsforindex ( $image, $transparency );
				$transparency = imagecolorallocate ( $image_resized, $trnprt_color ['red'], $trnprt_color ['green'], $trnprt_color ['blue'] );
				imagefill ( $image_resized, 0, 0, $transparency );
				imagecolortransparent ( $image_resized, $transparency );
			}
		} elseif ($info [2] == IMAGETYPE_PNG) {
			imagealphablending ( $image_resized, false );
			$color = imagecolorallocatealpha ( $image_resized, 0, 0, 0, 127 );
			imagefill ( $image_resized, 0, 0, $color );
			imagesavealpha ( $image_resized, true );
		}
		
		imagecopyresampled ( $image_resized, $image, 0, 0, 0, 0, $width, $height, $width_old, $height_old );
		
		# Preparing a method of providing result
		switch (strtolower ( $output )) {
			case 'browser' :
				$mime = image_type_to_mime_type ( $info [2] );
				header ( "Content-type: $mime" );
				$output = NULL;
				break;
			case 'file' :
				$output = $newFile;
				break;
			case 'return' :
				return $image_resized;
				break;
			default :
				break;
		}
		
		# Writing image according to type to the output destination
		switch ($outType) {
			case IMAGETYPE_GIF :
				imagegif ( $image_resized, $output );
				break;
			case IMAGETYPE_JPEG :
				imagejpeg ( $image_resized, $output );
				break;
			case IMAGETYPE_PNG :
				imagepng ( $image_resized, $output );
				break;
			default :
				return false;
		}
		
		return "Image Uploaded Successfully";
	}
	
	/*
	 *detecting upload folder as category
	 * @
	 */
	public function getUploadDir($cat = '') {
		$sub_dir = WWW_ROOT . "img" . DS;
		
		if ($cat == 'p') {
			$path = $sub_dir . "products" . DS;
		}elseif($cat =='t') {
		    $path = $sub_dir . "tags" . DS;
		}elseif($cat =='v') {
		    $path = $sub_dir . "polls" . DS;
		}elseif($cat =='ps') {
		    $path = $sub_dir . "pages" . DS;
		}elseif($cat =='c') {
		    $path = $sub_dir . "contents" . DS;
		}else {
		    $path = $sub_dir;
		}
		
		return $path;
	}
	/*
	 * @ get file extension
	 */
	public function getFileExtension($file_name) {
		$value = explode(".", $file_name['name']);
		return strtolower(array_pop($value));
		//return end ( explode ( ".", strtolower ( $file_name ['name'] ) ) );
	}
	
}
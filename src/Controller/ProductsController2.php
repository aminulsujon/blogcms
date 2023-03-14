<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\ORM\TableRegistry;
date_default_timezone_set('Asia/Dhaka');

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $siteoptions = $this->siteoptions();
        $this->set(compact('siteoptions'));
    }

    public function photo(){
        if ($this->request->is(['post'])) {
            $data = $this->request->getData();
            $txtSearch = $data['txtSearch'];
            $this->paginate = ['contain'=>array('Uploads','Upvideos','Tags'),'order'=>['Products.id DESC'],
                'conditions'=>['Products.genus'=>1,'title LIKE'=>'%'.$txtSearch.'%','Products.status !='=>4]
            ];
            $this->set(compact('txtSearch'));
        }else{
            $this->paginate = ['contain'=>array('Uploads'),'order'=>['Products.id DESC'],
                'conditions'=>['Products.genus'=>2,'Products.status !='=>4]
            ];
        }
        $products = $this->paginate($this->Products);
        $this->set(compact('products'));
    }


     /*pthoto video controll*/
    public function media($media_type = null)
    {
        
        $this->paginate = [
            'contain' => [],
            'conditions'=>['Products.genus'=>$media_type],
            'order' => ['Products.id DESC'],
        ];

        $products = $this->paginate($this->Products);
        $this->set(compact('products'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if ($this->request->is(['post'])) {
            $data = $this->request->getData();
            $txtSearch = $data['txtSearch'];
            $this->paginate = ['contain'=>array('Uploads','Upvideos','Tags'),'order'=>['Products.id DESC'],
                'conditions'=>['Products.genus'=>1,'title LIKE'=>'%'.$txtSearch.'%','Products.status !='=>4]
            ];
            $this->set(compact('txtSearch'));
        }else{
            $this->paginate = ['contain'=>array('Uploads','Upvideos','Tags'),'order'=>['Products.id DESC'],
                'conditions'=>['Products.genus'=>1,'Products.status !='=>4]
            ];
        }
        $products = $this->paginate($this->Products);
        $this->set(compact('products'));
    }

    public function top()
    {
        if ($this->request->is(['post'])) {
            $tops = $this->request->getData();
            foreach ($tops as $top){
                $i=1;
                foreach ($top as $key => $value){
                    $products = $this->Products->find('all')->where(['id' => $value['id']])->first();
                    $products->topseq = $i;
                    $this->Products->save($products);
                    $i++;
                }
            }
            /*update top cache*/
            //$this->Products->cacheUpdateTop();
            $this->redirect($this->referer());
        }else{
            $products = $this->Products->find('all')
                ->where(['Products.topseq >' => 0])
                ->order(['Products.topseq']);
            $this->set(compact('products'));
        }
    }
    

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Tags', 'Uploads'],
            'conditions' => ['Products.status !='=>4]
        ]);

        $this->set('product', $product);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //pr($myusergroup_id);die();
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {

            if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                // $fileinfo = @getimagesize($_FILES["fileToUpload1"]['tmp_name']);
                // $width = $fileinfo[0];
                // $height = $fileinfo[1];
                //if($width == 800 && $height == 450){
                    $data =  $this->request->getData();
                    $data['user_id'] = $this->Auth->user('id');
                    $product = $this->Products->patchEntity($product, $data);
                    $result = $this->Products->save($product);
                    if ($result) {
                        $product_id = $result->id;
                        $this->Flash->success(__('Saved'));
                        $this->loadComponent('Uploader');
                        //image 1
                        if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                        
                            $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                            $data_upload['imgname'] = $this->clean($_FILES["fileToUpload1"]["name"]);
                            $data_upload['product_id'] = $product_id;
                            $data_upload['caption'] = $data['caption1'];
                            $data_upload['status'] = 1;
                            $upload = $this->Uploads->newEmptyEntity();
                            $upload = $this->Uploads->patchEntity($upload, $data_upload);
                            $resultu = $this->Uploads->save($upload);
                            if ($resultu) {
                                if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                                    $recordu_id = $resultu->id;
                                    $this->loadComponent('Uploader');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-large-'.$recordu_id, 'p','','1000','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                }
                            $this->Flash->success(__('The image 1 has been saved.'));
                            }
                        } //end image 1
                        //$this->createsitemap();
                        switch ($product['genus']) {
                            case 1:
                                return $this->redirect(['action' => 'index']);
                                break;
                            case 2:
                                return $this->redirect(['action' => 'media',2]);
                                break;
                            case 3:
                                return $this->redirect(['action' => 'media',3]);
                                break;
                            default:
                                return $this->redirect($this->referer());
                                break;
                        }
                        $this->Flash->error(__('News has been saved successfully'));
                    }
                // }else{
                //     $this->Flash->error(__('Image size not matched. Please upload 800px / 450px image'));
                // }
            }
            
            $this->Flash->error(__('News could not be saved. Please, try again.'));
        }
        $tags = $this->Products->Tags->find('list', ['limit' => 200,'conditions'=>['Tags.title !='=>'আরও']]);
        $this->Reporters = TableRegistry::getTableLocator()->get('Reporters');
        $this->set(compact('product', 'tags'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function album()
    {
        //pr($myusergroup_id);die();
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $data =  $this->request->getData();
            //pr($data);die();
            if(!empty($_FILES["fileToUpload0"]['tmp_name']) && $_FILES["fileToUpload0"]['error']==0){
                // $fileinfo = @getimagesize($_FILES["fileToUpload0"]['tmp_name']);
                // $width = $fileinfo[0];
                // $height = $fileinfo[1];
                //if($width == 800 && $height == 450){
                    $data =  $this->request->getData();
                    $data['user_id'] = $this->Auth->user('id');
                    $product = $this->Products->patchEntity($product, $data);
                    $result = $this->Products->save($product);
                    if ($result) {
                        $product_id = $result->id;
                        $this->Flash->success(__('Saved'));
                        $this->loadComponent('Uploader');
                        
                        //image 1
                        $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                        if(!empty($_FILES["fileToUpload0"]['tmp_name']) && $_FILES["fileToUpload0"]['error']==0){
                            $data_upload['imgname'] = $this->clean($_FILES["fileToUpload0"]["name"]);
                            $data_upload['product_id'] = $product_id;
                            $data_upload['caption'] = $data['caption0'];
                            $data_upload['status'] = 1;
                            $upload = $this->Uploads->newEmptyEntity();
                            $upload = $this->Uploads->patchEntity($upload, $data_upload);
                            $resultu = $this->Uploads->save($upload);
                            if ($resultu) {
                                if(!empty($_FILES["fileToUpload0"]['tmp_name']) && $_FILES["fileToUpload0"]['error']==0){
                                    $recordu_id = $resultu->id;
                                    $this->loadComponent('Uploader');
        $this->Uploader->uploadImage($_FILES["fileToUpload0"], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload0"], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload0"], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                }
                            $this->Flash->success(__('The image 1 has been saved.'));
                            }
                        }
                        $imgCount = $data['imageCounter'];
                        for($i=1;$i<$imgCount+1;$i++){
                            if(!empty($_FILES["fileToUpload".$i]['tmp_name']) && $_FILES["fileToUpload".$i]['error']==0){
                                $data_upload['imgname'] = $this->clean($_FILES["fileToUpload".$i]["name"]);
                                $data_upload['product_id'] = $product_id;
                                $data_upload['caption'] = $data['caption'.$i];
                                $data_upload['status'] = 1;
                                $upload = $this->Uploads->newEmptyEntity();
                                $upload = $this->Uploads->patchEntity($upload, $data_upload);
                                $resultu = $this->Uploads->save($upload);
                                if ($resultu) {
                                    $recordu_id = $resultu->id;
                                    $this->loadComponent('Uploader');
            $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
            $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
            $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                    $this->Flash->success(__('The image '.($i+1).' has been saved.'));
                                }
                            }
                        }

                        return $this->redirect(['action' => 'photo']);

                        //$this->uploadAlbumPhotos($data['fileToUploadAlbumPhoto'],$product_id);
                        //$this->createsitemap();
                        // switch ($product['genus']) {
                        //     case 1:
                        //         return $this->redirect(['action' => 'index']);
                        //         break;
                        //     case 2:
                        //         return $this->redirect(['action' => 'photo']);
                        //         break;
                        //     case 3:
                        //         return $this->redirect(['action' => 'media',3]);
                        //         break;
                        //     default:
                        //         return $this->redirect($this->referer());
                        //         break;
                        // }
                        $this->Flash->error(__('News has been saved successfully'));
                    }
                // }else{
                //     $this->Flash->error(__('Image size not matched. Please upload 800px / 450px image'));
                // }
            }
            
            $this->Flash->error(__('News could not be saved. Please, try again.'));
        }
        $tags = $this->Products->Tags->find('list', ['limit' => 200,'conditions'=>['Tags.title !='=>'আরও']]);
        $this->Reporters = TableRegistry::getTableLocator()->get('Reporters');
        $this->set(compact('product', 'tags'));
    }

    // public function uploadAlbumPhotos($photos = null,$product_id = null){
    //     $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
    //     $this->loadComponent('Uploader');
    //     foreach($photos as $photo){ pr($photo['file']);die();
    //         $data_upload['imgname'] = $this->clean($photo["fileToUploadAlbumPhoto"]["name"]);
    //         $data_upload['product_id'] = $product_id;
    //         $data_upload['caption'] = $data['caption'];
    //         $data_upload['status'] = 1;
    //         $upload = $this->Uploads->newEmptyEntity();
    //         $upload = $this->Uploads->patchEntity($upload, $data_upload);
    //         $resultu = $this->Uploads->save($upload);
    //         if ($resultu) {
    //             if(!empty($_FILES["fileToUploadAlbumPhoto"]['tmp_name']) && $_FILES["fileToUploadAlbumPhoto"]['error']==0){
    //                 $recordu_id = $resultu->id;
                    
    // $this->Uploader->uploadImage($_FILES["fileToUploadAlbumPhoto"], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
    // $this->Uploader->uploadImage($_FILES["fileToUploadAlbumPhoto"], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
    // $this->Uploader->uploadImage($_FILES["fileToUploadAlbumPhoto"], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
    //             }
    //         }
    //     }
        
        
    //     $this->Flash->success(__('The image 1 has been saved.'));
    // }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        
        $product = $this->Products->get($id, [
            'contain' => ['Tags','Uploads'],
            'conditions' => ['Products.status != '=>4]
        ]);
        if(empty($product)){
            $this->redirect(['action'=>'index']);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            
                    $data = $this->request->getData();
                    $product = $this->Products->patchEntity($product, $data);
                    if ($this->Products->save($product)) {
                        //image 1
                        $product_id = $id;
                        //pr($_FILES["fileToUpload1"]);die();
                        //old image replace
                        if(!empty($data['uploadid1'])){
                            if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                                
                                $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                                $upload = $this->Uploads->get($data['uploadid1'], [
                                    'contain' => [],
                                ]);
                                $data_upload['imgname'] = $this->clean($_FILES["fileToUpload1"]["name"]);
                                if(!empty($data['caption1'])){
                                    $data_upload['caption'] = $data['caption1'];
                                }
                                $upload = $this->Uploads->patchEntity($upload, $data_upload);
                                $result = $this->Uploads->save($upload);
                                $recordu_id = $data['uploadid1'];
                                    $this->loadComponent('Uploader');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-large-'.$recordu_id, 'p','','1000','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                $this->Flash->success(__('Image replaced'));
                            }elseif(!empty($data['caption1'])){
                                $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                                $upload = $this->Uploads->get($data['uploadid1'], [
                                    'contain' => [],
                                ]);
                                $data_upload['caption'] = $data['caption1'];
                                $upload = $this->Uploads->patchEntity($upload, $data_upload);
                                $result = $this->Uploads->save($upload);
                                $this->Flash->success(__('Caption saved.'));
                            }
                        }else{
                            if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                                $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                                $data_upload['imgname'] = $this->clean($_FILES["fileToUpload1"]["name"]);
                                $data_upload['product_id'] = $product_id;
                                $data_upload['caption'] = $data['caption1'];
                                $data_upload['status'] = 1;
                                $upload = $this->Uploads->newEmptyEntity();
                                $upload = $this->Uploads->patchEntity($upload, $data_upload);
                                $resultu = $this->Uploads->save($upload);
                                if ($resultu) {
                                    if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                                        $recordu_id = $resultu->id;
                                        $this->loadComponent('Uploader');
            $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-large-'.$recordu_id, 'p','','1000','jpg');
            $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
            $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
            $this->Uploader->uploadImage($_FILES["fileToUpload1"], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                    }
                                //$this->Flash->success(__('New saved.'));
                                }
                            }
                        }
                        //$this->createsitemap();
                        $this->Flash->success(__('News has been updated.'));
                        switch ($product['genus']) {
                            case 1:
                                return $this->redirect(['action' => 'index']);
                                break;
                            case 2:
                                return $this->redirect(['action' => 'media',2]);
                                break;
                            case 3:
                                return $this->redirect(['action' => 'media',3]);
                                break;
                            default:
                                return $this->redirect($this->referer());
                                break;
                        }
                        return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Could not be updated. Please, try again.'));
        }
        $tags = $this->Products->Tags->find('list', ['limit' => 200]);
        $this->Reporters = TableRegistry::getTableLocator()->get('Reporters');
        $this->set(compact('product', 'tags'));
    }

    public function albumedit($id = null)
    {
        
        $product = $this->Products->get($id, [
            'contain' => ['Tags','Uploads'],
            'conditions' => ['Products.status != '=>4]
        ]);
        if(empty($product)){
            $this->redirect(['action'=>'index']);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            
                    $data = $this->request->getData();
                    $product = $this->Products->patchEntity($product, $data);
                    if ($this->Products->save($product)) {
                        //image 1
                        $product_id = $id;
                        //pr($_FILES["fileToUpload1"]);die();
                        //old image replace

                        //edit caption
                        $this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
                        //pr($data);die();
                        if(sizeof($data['Uploads']) > 0 ){
                            foreach($data['Uploads'] as $upl){
                                $dataUp = [];
                                $upload_id = $upl['id'];
                                $upload = $this->Uploads->get($upload_id, []);
                                //pr($upload);
                                $dataUp['id'] = $upload_id;
                                $dataUp['caption'] = $upl['caption'];
                                $uploadE = $this->Uploads->patchEntity($upload, $dataUp);
                                $result = $this->Uploads->save($uploadE);
                                //$uploadE = ;
                            }
                        }
                        $imgCount = $data['imageCounter'];
                        
                        //pr($imgCount);die();
                        if($imgCount > 0) {   
                            for($i=1;$i<$imgCount+1;$i++){
                                if(!empty($_FILES["fileToUpload".$i]['tmp_name']) && $_FILES["fileToUpload".$i]['error']==0){
                                    $data_upload['imgname'] = $this->clean($_FILES["fileToUpload".$i]["name"]);
                                    $data_upload['product_id'] = $product_id;
                                    $data_upload['caption'] = $data['caption'.$i];
                                    $data_upload['status'] = 1;
                                    $upload = $this->Uploads->newEmptyEntity();
                                    $upload = $this->Uploads->patchEntity($upload, $data_upload);
                                    $resultu = $this->Uploads->save($upload);
                                    if ($resultu) {
                                        $recordu_id = $resultu->id;
                                        $this->loadComponent('Uploader');
                $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-medium-'.$recordu_id, 'p','','800','jpg');
                $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-small-'.$recordu_id, 'p','','350','jpg');
                $this->Uploader->uploadImage($_FILES["fileToUpload".$i], $data_upload['imgname'].'-thumb-'.$recordu_id, 'p','','100','jpg');
                                        $this->Flash->success(__('The image '.($i+1).' has been saved.'));
                                    }
                                }
                            }
                        }
                        //$this->createsitemap();
                        $this->Flash->success(__('Data has been updated.'));
                        
                        return $this->redirect(['action' => 'photo']);
            }
            $this->Flash->error(__('Could not be updated. Please, try again.'));
        }
        $tags = $this->Products->Tags->find('list', ['limit' => 200]);
        $this->Reporters = TableRegistry::getTableLocator()->get('Reporters');
        $this->set(compact('product', 'tags'));
    }

    public function remove($id = null)
    {
        
        $product = $this->Products->get($id);
            $data['id'] = $id;
            $data['status'] = 4;
            $product = $this->Products->patchEntity($product, $data);
            if ($this->Products->save($product)) {
                $this->Flash->error(__('Content has been deleted.'));
                return $this->redirect($this->referar());
            }
            $this->Flash->error(__('Could not be deleted. Please, try again.'));
            return $this->redirect($this->referar());
    }

    public function clean($string) {
        $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $string);
        $string = str_replace(' ', '-', $withoutExt); // Replaces all spaces with hyphens.
        $string = str_replace('.', '-', $string); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }
    
	public function changestatus($id = null)
    {
        $product = $this->Products->get($id, [
            
        ]);
        if($product['status'] ==1){
        	$new_status = 2;
        }else{
        	$new_status = 1;
        } 
        $product['status'] = $new_status;
    	if ($this->Products->save($product)) {
			$this->Flash->success(__('saved.'));
			return $this->redirect($this->referer());
		}
        $tags = $this->Products->Tags->find('list', ['limit' => 200]);
        $this->set(compact('product', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deletess($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referar());
    }
    
	public function maketop($id = null)
    {
        $product = $this->Products->get($id, [
            
        ]);
        if(!empty($product->topseq)){
        	$top_seq = 'NULL';
        }else{
        	$top_seq = 1;
        }
        $data['id'] = $id;
        $data['topseq'] = $top_seq;
         
        $product = $this->Products->patchEntity($product, $data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
    }
    public function makelive($id = null)
    {
        $product = $this->Products->get($id, [
            
        ]);
        if(!empty($product->live)){
        	$top_seq = 'NULL';
        }else{
        	$top_seq = 1;
        }
        $data['id'] = $id;
        $data['live'] = $top_seq;
         
        $product = $this->Products->patchEntity($product, $data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
    }

    public function makeheadingbox($id = null)
    {
        $product = $this->Products->get($id, [
            
        ]);
        if(!empty($product->headingbox)){
        	$top_seq = 'NULL';
        }else{
        	$top_seq = 1;
        }
        $data['id'] = $id;
        $data['headingbox'] = $top_seq;
         
        $product = $this->Products->patchEntity($product, $data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
    }

    public function makefeaturebox($id = null)
    {
        $product = $this->Products->get($id, [
            
        ]);
        if(!empty($product->featurebox)){
        	$top_seq = 'NULL';
        }else{
        	$top_seq = 1;
        }
        $data['id'] = $id;
        $data['featurebox'] = $top_seq;
         
        $product = $this->Products->patchEntity($product, $data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
    }

    public function homelive($id = null,$value = null){
        $this->Siteoptions = TableRegistry::getTableLocator()->get('Siteoptions');
        $siteoption = $this->Siteoptions->get($id, [
            
            ]);
        
        $data['ovalue'] = $value;
        $siteoption = $this->Siteoptions->patchEntity($siteoption, $data);
        if ($this->Siteoptions->save($siteoption)) {
            $this->Flash->success(__('The action has been taken, please check in home page.'));
            return $this->redirect($this->referer());
        }

        $this->set(compact('siteoption'));
    }


    public function createsitemap(){
		$products = $this->Products->find('all',['contain'=>array('Uploads','Upvideos'),'order'=>['Products.id DESC'],'conditions'=>['Products.genus'=>1]]);
		$dom = new \DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;
		$xml_file_name = 'sitemap.xml';
		$root = $dom->createElement('urlset');

		$attr_xmlns = new \DOMAttr('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
		$attr_xmlns_news = new \DOMAttr('xmlns:news', 'http://www.google.com/schemas/sitemap-news/0.9');
		
		$root->setAttributeNode($attr_xmlns);
		$root->setAttributeNode($attr_xmlns_news);
			
		$tags = $this->Products->Tags->find('all',array(
			'conditions'=>array('Tags.status'=>1,'Tags.tagtype'=>1),
			'order'=>array('Tags.id DESC')
		));

        $child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/');
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','1');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);

            $child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/live');
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.9');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);

            $child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/archive');
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.9');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);

            $child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/video');
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.9');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);

            $child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/photo');
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.9');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);



        foreach ($tags as $nf) {
			$child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/topics/'.$nf->slug);
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.8');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);
		}

		foreach ($products as $nf) {
			$child_node_items = $dom->createElement('url');
			$child_item_loc = $dom->createElement('loc', 'https://www.news24bd.net/news/'.$nf->slug);
			$child_node_items->appendChild($child_item_loc);
            $child_item_cha = $dom->createElement('changefreq','always');
			$child_node_items->appendChild($child_item_cha);
            $child_item_pri = $dom->createElement('priority','0.7');
			$child_node_items->appendChild($child_item_pri);
			$root->appendChild($child_node_items);
			
		}
			
		$dom->appendChild($root);

		$dom->save($xml_file_name);

		return "$xml_file_name UPDATED";
		
	}

    public function livecomment($produt_id = null){
        $this->Comments = TableRegistry::getTableLocator()->get('Comments');
        $comment = $this->Comments->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['status'] = 1;
            $data['client_id'] = $this->Auth->user('id');
            $data['commenttype'] = 1;
            //pr($data);die();
            $comment = $this->Comments->patchEntity($comment, $data);
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $product = $this->Products->get($produt_id, [
            'contain' => ['Tags', 'Uploads'],
        ]);
        
        $this->set(compact('product', 'comment'));
    }

}

<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
//namespace App\Http\Session;
use Cake\ORM\TableRegistry;
use Cake\Cache\Cache;

use Cake\I18n\Time;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('user');
        $this->Tags = TableRegistry::getTableLocator()->get('Tags');
        //$tags = Cache::read('tags','oneweek');
        if(empty($tags)){
            $tags = json_encode($this->Tags->users_tags(1));
            Cache::write('tags', $tags, 'oneweek');
        }
        //pr($tags);die();
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        //$products_latest = Cache::read('products_latest','oneweek');
        if(empty($products_latest)){
            $products_latest = json_encode($this->Products->users_products(8));
            Cache::write('products_latest', $products_latest, 'oneweek');
        }

        $siteoptions = $this->siteoptions();

        $this->set(compact('products_latest','tags','siteoptions'));

        $this->Auth->allow(['index','topics','view','cats','news','details','archive','photos','videos','live']);
    }

    public function live($slug = null){
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        
        if(empty($slug)){
            $pagesettings = TableRegistry::getTableLocator()->get('Pagesettings');
            $settings = json_encode($pagesettings->find('all',['conditions'=>['pagename'=>'live']])->first());
            $this->set(compact('settings'));
        }else{
            //$live = Cache::read('live_details_'.$slug,'oneweek');
            if(empty($live)){
                $live = json_encode($this->Products->users_products_details($slug));
                Cache::write('live_details_'.$slug, $live, 'oneweek');
                $this->set(compact('live'));
            }
        }
        //$live_galleries = Cache::read('live_galleries','oneweek');
        if(empty($live_galleries)){
            $live_galleries = json_encode($this->Products->users_products(20,1,4));
            //pr($live_galleries);die();
            Cache::write('live_galleries', $live_galleries, 'oneweek');
        }
        $this->set(compact('live_galleries'));
    }
# ============================================
# photos
# ============================================ 
    public function videos($gallery_id = null,$video_id = null){
        
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        
        if(empty($gallery_id)){
            //$video_galleries = Cache::read('video_galleries','oneweek');
            if(empty($video_galleries)){
                $video_galleries = json_encode($this->Products->users_products(20,1,3));
                Cache::write('video_galleries', $video_galleries, 'oneweek');
            }
            $pagesettings = TableRegistry::getTableLocator()->get('Pagesettings');
            $settings = json_encode($pagesettings->find('all',['conditions'=>['pagename'=>'video']])->first());
            $this->set(compact('video_galleries','settings'));
        }else{
            //$product = Cache::read('products_details_'.$gallery_id,'oneweek');
            if(empty($product)){
                $product = json_encode($this->Products->users_products_details($gallery_id));
                Cache::write('products_details_'.$gallery_id, $product, 'oneweek');
            }
            if(empty($products_latest)){
                $products_latest = json_encode($this->Products->users_products(10,1,3));
                Cache::write('products_latest', $products_latest, 'oneweek');
            }
            $this->set(compact('product','products_latest'));
            $this->render('videohome');
        }
        
        /*$this->Uploads = TableRegistry::getTableLocator()->get('Uploads');
        $this->paginate = [
            'conditions'=>['Uploads.status'=>1],
            'order'=>['Uploads.id DESC'],
            //'contain'=>['Uploads'],
            'limit'=>20
        ];
        $uploads = $this->paginate($this->Uploads);
        $this->set(compact('uploads'));*/
        
    }

# ============================================
# photos
# ============================================ 
    public function photos($gallery_id = null,$photo_id = null){
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        
        if(empty($gallery_id)){
            //$photo_galleries = Cache::read('photo_galleries','oneweek');
            if(empty($photo_galleries)){
                $photo_galleries = json_encode($this->Products->users_products(20,1,2));
                Cache::write('photo_galleries', $photo_galleries, 'oneweek');
            }
            $pagesettings = TableRegistry::getTableLocator()->get('Pagesettings');
        $settings = json_encode($pagesettings->find('all',['conditions'=>['pagename'=>'photo']])->first());
            $this->set(compact('photo_galleries','settings'));
        }else{
            //$product = Cache::read('products_details_'.$gallery_id,'oneweek');
            if(empty($product)){
                $product = json_encode($this->Products->users_products_details($gallery_id));
                Cache::write('products_details_'.$gallery_id, $product, 'oneweek');
            }
            if(empty($products_latest)){
                $products_latest = json_encode($this->Products->users_products(10,1,2));
                Cache::write('products_latest', $products_latest, 'oneweek');
            }
            $this->set(compact('product','products_latest'));
            $this->render('photohome');
        }

       // $this->set(compact('photo_gallery'));
    }

    
   
# ============================================
# HOME
# ============================================ 
    public function index(){
        
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        $this->Tags = TableRegistry::getTableLocator()->get('Tags');
        
        //latest products
        //$products_latest = Cache::read('products_latest','oneweek');
        /*if(empty($products_latest)){
            $products_latest = json_encode($this->Products->users_products(8));
            Cache::write('products_latest', $products_latest, 'oneweek');
        }*/
        $siteoptions = $this->siteoptions();
        
        //$products_top = Cache::read('products_top','oneweek');
        if(empty($products_top)){
            $products_top = json_encode($this->Products->users_product_top(5));
            Cache::write('products_top', $products_top, 'oneweek');
        }

        //$products_special = Cache::read('products_special','oneweek');
        if(empty($products_special)){
            $settings_products_special_id = array(1,3,4,8,);
            $products_special = json_encode(
            $this->Tags->find()
             ->where(['isspecial >'=>0])
             ->select(['id','title','slug'])
             ->contain([
                'Products' => function($q) {
                    return $q
                        ->where(['Products.status'=>1,'Products.genus'=>1,'Products.live > '=>0])
                        ->select(['Products.id','Products.title','Products.slug','Products.created'])
                        ->contain(['Uploads' => function($p) {
                                        return $p
                                            ->where(['status'=>1])
                                            ->select(['Uploads.id','Uploads.imgname','Uploads.caption','Uploads.product_id'])
                                            ->order(['created' =>'DESC']);
                            }])
                        ->order(['live'=>'DESC','created' =>'DESC'])
                        ->limit(30);
                }
            ])->order('Tags.isspecial ASC')
            );

            Cache::write('products_special', $products_special, 'oneweek');
        }

         //$videos = Cache::read('videos','oneweek');
        if(empty($videos)){
            $this->Upvideos = TableRegistry::getTableLocator()->get('Upvideos');
            $videos = json_encode($this->Upvideos->users_videos(9,1));
            Cache::write('videos', $videos, 'oneweek');
        }
        $pagesettings = TableRegistry::getTableLocator()->get('Pagesettings');
        $settings = json_encode($pagesettings->find('all',['conditions'=>['pagename'=>'index']])->first());
        $this->set(compact('products_top','products_special','videos','settings'));
    }

# ============================================
# SECTION/CATEGORY
# ============================================ 
    public function topics($slug = null,$page = null){
        if(!empty($slug)){
            $table_tags = TableRegistry::getTableLocator()->get('Tags');
            //$products_tagged = Cache::read('products_tagged_'.$id,'oneweek');
            if(empty($products_tagged)){
                $page = 100;
                $products_tagged = json_encode($table_tags->find()
                 ->where(['slug'=>$slug])
                 ->select(['id','title','slug'])
                 ->contain([
                    'Products' => function($q) {
                        return $q
                            ->where(['status'=>1,'genus'=>1])
                            ->select(['Products.id','Products.title','Products.slug','Products.created'])
                            ->contain(['Uploads' => function($p) {
                                            return $p
                                                ->where(['status'=>1])
                                                ->select(['Uploads.id','Uploads.imgname','Uploads.caption','Uploads.product_id'])
                                                ->order(['created' =>'DESC']);
                                }])
                            ->order(['created' =>'DESC'])
                            ->limit(100);
                    }
                ])
                );

                Cache::write('products_tagged_'.$slug, $products_tagged, 'oneweek');
            }
            
            $cat_details = json_encode($table_tags->find('all', ['conditions'=>['Tags.slug'=>$slug]]));
	        //pr($products_latest);die();
            $this->set(compact('products_tagged','cat_details'));
        }else{

        }
    }
# ============================================
# DETAILS
# ============================================

    public function view($slug = null)
    {
        if(empty($slug)){
            $this->redirect(['controller'=>'pages','action'=>'archive']);
        }
        $table_products = TableRegistry::getTableLocator()->get('Products');
        if(is_numeric($slug)){
            //find with id and redirect to actual link
        }
        //$product = Cache::read('products_details_'.$id,'oneweek');
        if(empty($product)){
            $product = json_encode($table_products->find('all', [
                'contain' => [
                    'Tags', 
                    'Comments'=>[
                            'conditions'=>['Comments.status'=>1]
                        ], 
                    'Uploads'=>[
                        'conditions'=>['Uploads.status'=>1]
                        ],
                    'Upvideos'=>[
                        'conditions'=>['Upvideos.status'=>1]
                    ]
                ],
                'conditions'=>['Products.status'=>1,'Products.slug'=>$slug]
            ])->first());
            Cache::write('products_details_'.$slug, $product, 'oneweek');
        }

        //$products_latest = Cache::read('products_latest','oneweek');
        if(empty($products_latest)){
            $products_latest = json_encode($table_products->users_products(8));
            Cache::write('products_latest', $products_latest, 'oneweek');
        }

        //$products_top = Cache::read('products_top','oneweek');
        if(empty($products_top)){
            $products_top = json_encode($table_products->users_products_top(5,1));//limit,genus
            Cache::write('products_top', $products_top, 'oneweek');
        }
        $table_comments = TableRegistry::getTableLocator()->get('Comments');
        $comment = $table_comments->newEmptyEntity();
        $this->set(compact('product','products_latest','products_top','comment'));
    }

# ============================================
# ARCHIVE
# ============================================ 
    public function archive($archive_type = null,$page_count = null){
        $this->Products = TableRegistry::getTableLocator()->get('Products');
        //$this->Contents = TableRegistry::getTableLocator()->get('Contents');
        //$this->Tags = TableRegistry::getTableLocator()->get('Tags');
        //$this->ProductsTags = TableRegistry::getTableLocator()->get('ProductsTags');
        
        if(empty($archive_type) && empty($page_count)){
            $product_page = 1;
        }else{
            $product_page = $page_count;
        }
        $this->set(compact('product_page'));

        //latest products
        $settings_products_per_page = 20;
        //$products_latest = Cache::read('products_latest','oneweek');
        if(empty($products_latest)){
            $products_latest = json_encode($this->Products->users_products($settings_products_per_page,$product_page));
            Cache::write('products_latest', $products_latest, 'oneweek');
        }
        
        //$products_top = Cache::read('products_top','oneweek');
        /*if(empty($products_top)){
            $products_top = json_encode($this->Products->find('all',[
                'contain'=>['Uploads'],
                'conditions'=>['Products.status'=>1,'Products.topseq IS NOT'=>null],
                'order'=>['Products.topseq'],
                'limit'=>5
            ]));
            Cache::write('products_top', $products_top, 'oneweek');
        }*/

        //$products_special = Cache::read('products_special','oneweek');
        /*if(empty($products_special)){
            $settings_products_special_id = 3;
            $products_special = json_encode($this->Tags->find()
             ->where(['id'=>$settings_products_special_id])
             ->select(['id','title','slug'])
             ->contain([
                'Products' => function($q) {
                    return $q
                        ->where(['status'=>1])
                        ->select(['Products.id','Products.title','Products.slug','Products.created'])
                        ->contain(['Uploads' => function($p) {
                                        return $p
                                            ->where(['status'=>1])
                                            ->select(['Uploads.id','Uploads.imgname','Uploads.caption','Uploads.product_id'])
                                            ->order(['created' =>'DESC']);
                            }])
                        ->order(['created' =>'DESC'])
                        ->limit(8);
                }
            ])
            );

            Cache::write('products_special', $products_special, 'oneweek');
        }
        //pr($products_special);die();
        */
        //$banners = $this->Contents->getCotnentsOfType(2);
        $pagesettings = TableRegistry::getTableLocator()->get('Pagesettings');
        $settings = json_encode($pagesettings->find('all',['conditions'=>['pagename'=>'archive']])->first());
        $this->set(compact('products_latest','settings_products_per_page','settings'));
    }


    public function in_array_r($needle, $haystack, $strict = false) {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->in_array_r($needle, $item, $strict))) {
                return true;
            }
        }
        return false;
    }
    
	public function details($id = null)
    {
    	$this->Contents = TableRegistry::getTableLocator()->get('Contents');
        $content = $this->Contents->get($id, [
            
        ]);

        $this->set('content', $content);
    }

    

}

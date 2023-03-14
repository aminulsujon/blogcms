<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Uploads Controller
 *
 * @property \App\Model\Table\UploadsTable $Uploads
 *
 * @method \App\Model\Entity\Upload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UploadsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $siteoptions = $this->siteoptions();
        $this->set(compact('siteoptions'));
    }

    public function inner($img_id = null)
    {
        //$this->loadComponent('Uploader');

        $upload = $this->Uploads->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            // pr($data);die();
            if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                $data['imgname'] = $this->clean(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME));
                //pr($data);die();
                $img_name = $data['imgname'];
                $upload = $this->Uploads->patchEntity($upload, $data);
                $result = $this->Uploads->save($upload);
                if ($result) {
                        $record_id = $result->id;
                        $this->loadComponent('Uploader');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-medium-'.$record_id, 'p','','800','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-small-'.$record_id, 'p','','350','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-thumb-'.$record_id, 'p','','100','jpg');
                    
                   $this->Flash->success(__('The image has been saved.'));
                   return $this->redirect(['action'=>'inner',$record_id]);
                   
                }
                //$this->set(compact('record_id','img_name'));
                //$this->Flash->error(__('The upload could not be saved. Please, try again.'));
            }
        }
        //pr($img_name);die();
        //$this->redirect($this->referer());
        //$products = $this->Uploads->Products->find('list', ['limit' => 200]);
        $this->set(compact('upload'));
        if(!empty($img_id)){
            $upload_data = $this->Uploads->get($img_id, [
                'contain' => [],
            ]);
            $this->set(compact('upload_data'));
        }
        $this->paginate = [
            'order' => ['Uploads.id DESC'],
        ];
        $uploaded = $this->paginate($this->Uploads);
        // $uploaded = $this->Uploads->find('all',['order'=>['Uploads.id DESC'],'limit'=>12]);
        $this->set(compact('uploaded'));
    }
  
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($product_id = null)
    {
        if(!empty($product_id)){
            $this->paginate = [
                'conditions' => ['Uploads.product_id'=>$product_id],
                'contain' => ['Products'],
                'order' => ['Uploads.id DESC'],
            ];
        }else{
            $this->paginate = [
                'contain' => ['Products'],
                'order' => ['Uploads.id DESC'],
            ];
        }
        $uploads = $this->paginate($this->Uploads);
        
        $upload = $this->Uploads->newEmptyEntity();
        $product = $this->Uploads->Products->get($product_id, []);

        $this->set(compact('uploads','upload', 'product'));
    }

   

    /**
     * View method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $upload = $this->Uploads->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set('upload', $upload);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function clean($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
       $string = str_replace('.', '-', $string); // Replaces all spaces with hyphens.
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public function add()
    {
        //$this->loadComponent('Uploader');

        $upload = $this->Uploads->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                $data['imgname'] = $this->clean(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME));
                //pr($data);die();
                $upload = $this->Uploads->patchEntity($upload, $data);
                $result = $this->Uploads->save($upload);
                if ($result) {
                        $record_id = $result->id;
                        $this->loadComponent('Uploader');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-medium-'.$record_id, 'p','','800','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-small-'.$record_id, 'p','','350','jpg');
        $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-thumb-'.$record_id, 'p','','100','jpg');
                    
                   $this->Flash->success(__('The image has been saved.'));
                   return $this->redirect($this->referer());
                   
                }
                $this->Flash->error(__('The upload could not be saved. Please, try again.'));
            }
        }
        $this->redirect($this->referer());
        $products = $this->Uploads->Products->find('list', ['limit' => 200]);
        $this->set(compact('upload', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $upload = $this->Uploads->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            /*$upload = $this->Uploads->patchEntity($upload, $this->request->getData());
            if ($this->Uploads->save($upload)) {
                $this->Flash->success(__('The upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload could not be saved. Please, try again.'));
*/
            $this->loadComponent('Uploader');
            $data = $this->request->getData();
            if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                $data['imgname'] = $this->clean($_FILES["fileToUpload"]["name"]);
            }
            $upload = $this->Uploads->patchEntity($upload, $data);
            $result = $this->Uploads->save($upload);
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-medium-'.$id, 'p','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-small-'.$id, 'p','','350','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-thumb-'.$id, 'p','','100','jpg');
                }
               $this->Flash->success(__('The image has been saved.'));
               return $this->redirect(['controller'=>'Uploads','action'=>'index',$upload->product_id]);
               
            }
        }
        $products = $this->Uploads->Products->find('list', ['limit' => 200]);
        $this->set(compact('upload', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $upload = $this->Uploads->get($id);
        if ($this->Uploads->delete($upload)) {
            $this->Flash->success(__('The upload has been deleted.'));
        } else {
            $this->Flash->error(__('The upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

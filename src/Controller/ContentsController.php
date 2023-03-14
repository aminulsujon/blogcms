<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contents Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContentsController extends AppController
{
	public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $this->set('arr_image_size',$this->arr_image_size());
    }
    
    private function arr_image_size(){
    	return array(1=>'Page 900x600',2=>'Banner 1500x300');
    }
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($content_type = null)
    {
    	if(empty($content_type)){
    		return $this->redirect(['controller'=>'contents','action'=>'index',1]);
    	}
    	$this->paginate = ['Contents'=>['conditions'=>['Contents.contenttype'=>$content_type]]];
        $contents = $this->paginate($this->Contents);

        $this->set(compact('contents'));
    }

    /**
     * View method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $content = $this->Contents->get($id, [
            'contain' => ['Tags'],
        ]);

        $this->set('content', $content);
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
        $content = $this->Contents->newEmptyEntity();
        if ($this->request->is('post')) {
        	$data = $this->request->getData();
        	$data['imgname'] = $this->clean($_FILES["fileToUpload"]["name"]);
            $content = $this->Contents->patchEntity($content, $data);
            $result = $this->Contents->save($content);	
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $result->id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-large-'.$record_id, 'c','','1400','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-medium-'.$record_id, 'c','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-small-'.$record_id, 'c','','400','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-thumb-'.$record_id, 'c','','100','jpg');
                }
               $this->Flash->success(__('The image has been saved.'));
               //return $this->redirect($this->referer());
               
            }
            	
            $this->Flash->success(__('The content has been saved.'));

            return $this->redirect(['action' => 'index']);
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $this->set(compact('content'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $content = $this->Contents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$data = $this->request->getData();
        	if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
        	$data['imgname'] = $this->clean($_FILES["fileToUpload"]["name"]);
        	}
        	//pr($data);die();
            $content = $this->Contents->patchEntity($content, $data);
            $result = $this->Contents->save($content);	
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-large-'.$record_id, 'c','','1400','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-medium-'.$record_id, 'c','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-small-'.$record_id, 'c','','400','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], $data['imgname'].'-thumb-'.$record_id, 'c','','100','jpg');
                }
               $this->Flash->success(__('The image has been saved.'));
               //return $this->redirect($this->referer());
               
            }
        
        }else{
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $this->set(compact('content'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $content = $this->Contents->get($id);
        if ($this->Contents->delete($content)) {
            $this->Flash->success(__('The content has been deleted.'));
        } else {
            $this->Flash->error(__('The content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

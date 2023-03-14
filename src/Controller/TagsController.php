<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 *
 * @method \App\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TagsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $siteoptions = $this->siteoptions();
        $this->set(compact('siteoptions'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($tagtype = null)
    {
        if(!empty($tagtype)){
            $this->paginate = [
                'contain' => ['ParentTags', 'Contents'],
                'conditions' => ['Tags.tagtype'=>$tagtype],
            ];
        }else{
            $this->paginate = [
                'contain' => ['ParentTags', 'Contents'],
            ];
        }

        
        $tags = $this->paginate($this->Tags);

        $this->set(compact('tags'));
    }

    /**
     * View method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => ['ParentTags', 'Contents', 'ChildTags'],
        ]);

        $this->set('tag', $tag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tag = $this->Tags->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $tag = $this->Tags->patchEntity($tag, $data);
            $result = $this->Tags->save($tag);
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $result->id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-medium-'.$record_id, 't','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-small-'.$record_id, 't','','350','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-thumb-'.$record_id, 't','','100','jpg');
                }

                $this->Flash->success(__('The tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The tag could not be saved. Please, try again.'));
        }
        $parentTags = $this->Tags->ParentTags->find('list', ['limit' => 200]);
        $contents = $this->Tags->Contents->find('list', ['limit' => 200]);
        $this->set(compact('tag', 'parentTags', 'contents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
             $data = $this->request->getData();
             if(empty($data['parent_id'])){
                $data['parent_id'] = 0;
             }
            $tag = $this->Tags->patchEntity($tag, $data);
            $result = $this->Tags->save($tag);
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-medium-'.$record_id, 't','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-small-'.$record_id, 't','','350','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'product-category-thumb-'.$record_id, 't','','100','jpg');
                }

                $this->Flash->success(__('The tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tag could not be saved. Please, try again.'));
        }
        $parentTags = $this->Tags->ParentTags->find('list', ['limit' => 200]);
        $contents = $this->Tags->Contents->find('list', ['limit' => 200]);
        $this->set(compact('tag', 'parentTags', 'contents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('The tag has been deleted.'));
        } else {
            $this->Flash->error(__('The tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

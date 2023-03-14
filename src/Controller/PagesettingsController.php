<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pagesettings Controller
 *
 * @property \App\Model\Table\PagesettingsTable $Pagesettings
 *
 * @method \App\Model\Entity\Pagesetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagesettingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pagesettings = $this->paginate($this->Pagesettings);

        $this->set(compact('pagesettings'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagesetting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagesetting = $this->Pagesettings->get($id, [
            'contain' => [],
        ]);

        $this->set('pagesetting', $pagesetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagesetting = $this->Pagesettings->newEmptyEntity();
        if ($this->request->is('post')) {
            $pagesetting = $this->Pagesettings->patchEntity($pagesetting, $this->request->getData());
           

            $result = $this->Pagesettings->save($pagesetting);
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $result->id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-medium-'.$record_id, 'ps','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-small-'.$record_id, 'ps','','350','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-thumb-'.$record_id, 'ps','','100','jpg');
                }

                $this->Flash->success(__('The pagesetting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The pagesetting could not be saved. Please, try again.'));
        }
        $this->set(compact('pagesetting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagesetting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagesetting = $this->Pagesettings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagesetting = $this->Pagesettings->patchEntity($pagesetting, $this->request->getData());
           $result = $this->Pagesettings->save($pagesetting);
            if ($result) {
                if(!empty($_FILES["fileToUpload"]['tmp_name']) && $_FILES["fileToUpload"]['error']==0){
                    $record_id = $id;
                    $this->loadComponent('Uploader');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-medium-'.$record_id, 'ps','','800','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-small-'.$record_id, 'ps','','350','jpg');
    $this->Uploader->uploadImage($_FILES["fileToUpload"], 'pagesetting-thumb-'.$record_id, 'ps','','100','jpg');
                }

                $this->Flash->success(__('The pagesetting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagesetting could not be saved. Please, try again.'));
        }
        $this->set(compact('pagesetting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagesetting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagesetting = $this->Pagesettings->get($id);
        if ($this->Pagesettings->delete($pagesetting)) {
            $this->Flash->success(__('The pagesetting has been deleted.'));
        } else {
            $this->Flash->error(__('The pagesetting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

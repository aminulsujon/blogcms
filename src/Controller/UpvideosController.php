<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Upvideos Controller
 *
 * @property \App\Model\Table\UpvideosTable $Upvideos
 *
 * @method \App\Model\Entity\Upvideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UpvideosController extends AppController
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
    public function index($product_id = null)
    {
        // if(!empty($product_id)){
        //      $this->paginate = [
        //         'contain' => ['Users', 'Products'],
        //         'conditions'=>['Upvideos.product_id'=>$product_id]
        //     ];
        // }else{
        //      $this->paginate = [
        //         'contain' => ['Users', 'Products'],
        //     ];
        // }
        if ($this->request->is(['post'])) {
            $data = $this->request->getData();
            $txtSearch = $data['txtSearch'];
            $this->paginate = ['order'=>['Upvideos.id DESC'],
                'conditions'=>['title LIKE'=>'%'.$txtSearch.'%']
            ];
            $this->set(compact('txtSearch'));
        }else{
            $this->paginate = [
                'order'=>['Upvideos.id DESC']
            ];
        }
        
        $upvideos = $this->paginate($this->Upvideos);
        //$product = $this->Upvideos->Products->get($product_id, []);
        //$upvideo = $this->Upvideos->newEmptyEntity();
        $this->set(compact('upvideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Upvideo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $upvideo = $this->Upvideos->get($id, [
            'contain' => ['Users', 'Products'],
        ]);

        $this->set('upvideo', $upvideo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $upvideo = $this->Upvideos->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['user_id'] = $this->Auth->user('id');
            $upvideo = $this->Upvideos->patchEntity($upvideo, $data);
            if ($this->Upvideos->save($upvideo)) {
                $this->Flash->success(__('The upvideo has been saved.'));

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The upvideo could not be saved. Please, try again.'));
        }
        $users = $this->Upvideos->Users->find('list', ['limit' => 200]);
        $products = $this->Upvideos->Products->find('list', ['limit' => 200]);
        $this->set(compact('upvideo', 'users', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Upvideo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $upvideo = $this->Upvideos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $upvideo = $this->Upvideos->patchEntity($upvideo, $this->request->getData());
            if ($this->Upvideos->save($upvideo)) {
                $this->Flash->success(__('The upvideo has been saved.'));

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The upvideo could not be saved. Please, try again.'));
        }
        $users = $this->Upvideos->Users->find('list', ['limit' => 200]);
        $products = $this->Upvideos->Products->find('list', ['limit' => 200]);
        $this->set(compact('upvideo', 'users', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Upvideo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $upvideo = $this->Upvideos->get($id);
        if ($this->Upvideos->delete($upvideo)) {
            $this->Flash->success(__('The upvideo has been deleted.'));
        } else {
            $this->Flash->error(__('The upvideo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 *
 * @method \App\Model\Entity\Comment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['add']);
    }

    public function changestatus($id = null,$status = null)
    {
        $product = $this->Comments->get($id, [
            
        ]);
        
        $product['status'] = $status;
        if ($this->Comments->save($product)) {
            $this->Flash->success(__('saved.'));
            return $this->redirect($this->referer());
        }
        
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Products', 'ParentComments'],
            'order' => ['Comments.id DESC']
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments'));
    }

    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Clients', 'Products', 'ParentComments', 'ChildComments'],
        ]);

        $this->set('comment', $comment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comment = $this->Comments->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['status'] = 3;
            $comment = $this->Comments->patchEntity($comment, $data);
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }

        /*$clients = $this->Comments->Clients->find('list', ['limit' => 200]);
        $products = $this->Comments->Products->find('list', ['limit' => 200]);
        $parentComments = $this->Comments->ParentComments->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'clients', 'products', 'parentComments'));*/
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $clients = $this->Comments->Clients->find('list', ['limit' => 200]);
        $products = $this->Comments->Products->find('list', ['limit' => 200]);
        $parentComments = $this->Comments->ParentComments->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'clients', 'products', 'parentComments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        //$this->Auth->allow(['add']);
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $siteoptions = $this->siteoptions();
        $this->set(compact('siteoptions'));
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('codebaseLogin');
        if ($this->request->is('post')) { 
            
        $user = $this->Auth->identify(); 
        //pr($user);die();
            if ($user) { 
                if($user['status'] != 1){
                    $this->Flash->error(__('User is not active, please contact with admin')); 
                    return $this->redirect(['controller'=>'users','action'=>'login']);
                }
                $this->Auth->setUser($user); 
                return $this->redirect(['controller'=>'products','action'=>'add']); 
            }else{
                $this->Flash->error(__('Invalid username or password, try again')); 
            } 
        }
    }

    public function dashboard() { 
        //$this->Flash->success('You are logged in');
        $this->Tags = TableRegistry::getTableLocator()->get('Tags');
        $this->Products = TableRegistry::getTableLocator()->get('Products');

        $tags = $this->Tags->find('all')->count();
        $products = $this->Products->find('all')->count();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $this->set(compact('tags','products'));
    }

    public function logout() { 
        $this->Flash->success('You are logged out');
        return $this->redirect($this->Auth->logout()); 
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usergroups'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Usergroups'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $usergroups = $this->Users->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'usergroups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $usergroups = $this->Users->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'usergroups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

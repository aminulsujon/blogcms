<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usercontrolls Controller
 *
 * @property \App\Model\Table\UsercontrollsTable $Usercontrolls
 *
 * @method \App\Model\Entity\Usercontroll[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsercontrollsController extends AppController
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
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usergroups'],
        ];
        $usercontrolls = $this->paginate($this->Usercontrolls);

        $this->set(compact('usercontrolls'));
    }

    /**
     * View method
     *
     * @param string|null $id Usercontroll id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usercontroll = $this->Usercontrolls->get($id, [
            'contain' => ['Usergroups'],
        ]);

        $this->set('usercontroll', $usercontroll);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usercontroll = $this->Usercontrolls->newEmptyEntity();
        if ($this->request->is('post')) {
            $usercontroll = $this->Usercontrolls->patchEntity($usercontroll, $this->request->getData());
            if ($this->Usercontrolls->save($usercontroll)) {
                $this->Flash->success(__('The usercontroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usercontroll could not be saved. Please, try again.'));
        }
        $usergroups = $this->Usercontrolls->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('usercontroll', 'usergroups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usercontroll id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usercontroll = $this->Usercontrolls->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usercontroll = $this->Usercontrolls->patchEntity($usercontroll, $this->request->getData());
            if ($this->Usercontrolls->save($usercontroll)) {
                $this->Flash->success(__('The usercontroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usercontroll could not be saved. Please, try again.'));
        }
        $usergroups = $this->Usercontrolls->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('usercontroll', 'usergroups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usercontroll id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usercontroll = $this->Usercontrolls->get($id);
        if ($this->Usercontrolls->delete($usercontroll)) {
            $this->Flash->success(__('The usercontroll has been deleted.'));
        } else {
            $this->Flash->error(__('The usercontroll could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

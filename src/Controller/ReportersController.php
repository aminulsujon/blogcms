<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reporters Controller
 *
 * @property \App\Model\Table\ReportersTable $Reporters
 * @method \App\Model\Entity\Reporter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportersController extends AppController
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
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $reporters = $this->paginate($this->Reporters);

        $this->set(compact('reporters'));
    }

    /**
     * View method
     *
     * @param string|null $id Reporter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reporter = $this->Reporters->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('reporter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reporter = $this->Reporters->newEmptyEntity();
        if ($this->request->is('post')) {
            $reporter = $this->Reporters->patchEntity($reporter, $this->request->getData());
            if ($this->Reporters->save($reporter)) {
                $this->Flash->success(__('The reporter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reporter could not be saved. Please, try again.'));
        }
        //$products = $this->Reporters->Products->find('list', ['limit' => 200]);
        $this->set(compact('reporter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reporter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reporter = $this->Reporters->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reporter = $this->Reporters->patchEntity($reporter, $this->request->getData());
            if ($this->Reporters->save($reporter)) {
                $this->Flash->success(__('The reporter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reporter could not be saved. Please, try again.'));
        }
        //$products = $this->Reporters->Products->find('list', ['limit' => 200]);
        $this->set(compact('reporter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reporter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reporter = $this->Reporters->get($id);
        if ($this->Reporters->delete($reporter)) {
            $this->Flash->success(__('The reporter has been deleted.'));
        } else {
            $this->Flash->error(__('The reporter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

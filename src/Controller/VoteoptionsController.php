<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Voteoptions Controller
 *
 * @property \App\Model\Table\VoteoptionsTable $Voteoptions
 * @method \App\Model\Entity\Voteoption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VoteoptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Votes'],
        ];
        $voteoptions = $this->paginate($this->Voteoptions);

        $this->set(compact('voteoptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Voteoption id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voteoption = $this->Voteoptions->get($id, [
            'contain' => ['Votes'],
        ]);

        $this->set(compact('voteoption'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voteoption = $this->Voteoptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $voteoption = $this->Voteoptions->patchEntity($voteoption, $this->request->getData());
            if ($this->Voteoptions->save($voteoption)) {
                $this->Flash->success(__('The voteoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voteoption could not be saved. Please, try again.'));
        }
        $votes = $this->Voteoptions->Votes->find('list', ['limit' => 200]);
        $this->set(compact('voteoption', 'votes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voteoption id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voteoption = $this->Voteoptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voteoption = $this->Voteoptions->patchEntity($voteoption, $this->request->getData());
            if ($this->Voteoptions->save($voteoption)) {
                $this->Flash->success(__('The voteoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voteoption could not be saved. Please, try again.'));
        }
        $votes = $this->Voteoptions->Votes->find('list', ['limit' => 200]);
        $this->set(compact('voteoption', 'votes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voteoption id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voteoption = $this->Voteoptions->get($id);
        if ($this->Voteoptions->delete($voteoption)) {
            $this->Flash->success(__('The voteoption has been deleted.'));
        } else {
            $this->Flash->error(__('The voteoption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

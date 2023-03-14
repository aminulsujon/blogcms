<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Siteoptions Controller
 *
 * @property \App\Model\Table\SiteoptionsTable $Siteoptions
 *
 * @method \App\Model\Entity\Siteoption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SettingsController extends AppController
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
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }
    public function homepage()
    {
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }
    public function social()
    {
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }
    public function custom()
    {
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }
    public function color()
    {
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }
    public function template()
    {
        $this->paginate = ['limit'=>50];
        $web = $this->paginate($this->Siteoptions);
        $this->set(compact('web'));
    }

    /**
     * View method
     *
     * @param string|null $id Siteoption id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $siteoption = $this->Siteoptions->get($id, [
            'contain' => [],
        ]);

        $this->set('siteoption', $siteoption);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $siteoption = $this->Siteoptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $siteoption = $this->Siteoptions->patchEntity($siteoption, $this->request->getData());
            if ($this->Siteoptions->save($siteoption)) {
                $this->Flash->success(__('The siteoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The siteoption could not be saved. Please, try again.'));
        }
        $this->set(compact('siteoption'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Siteoption id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $siteoption = $this->Siteoptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $siteoption = $this->Siteoptions->patchEntity($siteoption, $this->request->getData());
            if ($this->Siteoptions->save($siteoption)) {
                $this->Flash->success(__('The siteoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The siteoption could not be saved. Please, try again.'));
        }
        $this->set(compact('siteoption'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Siteoption id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $siteoption = $this->Siteoptions->get($id);
        if ($this->Siteoptions->delete($siteoption)) {
            $this->Flash->success(__('The siteoption has been deleted.'));
        } else {
            $this->Flash->error(__('The siteoption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

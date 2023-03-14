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
class SiteoptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $siteoptions = $this->paginate($this->Siteoptions);

        $this->set(compact('siteoptions'));
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

                return $this->redirect($this->referer());
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

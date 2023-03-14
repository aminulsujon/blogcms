<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Votes Controller
 *
 * @property \App\Model\Table\VotesTable $Votes
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VotesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('codebaseAdmin');
        $siteoptions = $this->siteoptions();
        $this->set(compact('siteoptions'));
        $this->Auth->allow(['store']);
    }


    public function store($id = null)
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $voteoption = $this->Votes->Voteoptions->get($data['poll'], [
                'contain' => [],
            ]);

            $option_data['id'] = $data['poll'];
            $option_data['vcount'] = $voteoption['vcount']+1;
            
            $voteoption = $this->Votes->Voteoptions->patchEntity($voteoption, $option_data);
            $this->Votes->Voteoptions->save($voteoption);

            $cookie_name = "poll";
            $cookie_value = $data['poll_id'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            $this->redirect('/poll');
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = ['order'=>['Votes.id DESC'],'contain'=>['Voteoptions']];
        $votes = $this->paginate($this->Votes);

        $this->set(compact('votes'));
    }

    /**
     * View method
     *
     * @param string|null $id Vote id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vote = $this->Votes->get($id, [
            'contain' => ['Voteoptions'],
        ]);

        $this->set(compact('vote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vote = $this->Votes->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $vote = $this->Votes->patchEntity($vote, $data);
            $result = $this->Votes->save($vote);
            if ($result) {
                $vote_id = $result->id;
                foreach($data['Voteoptions'] as $vo){
                    $option_data['vote_id'] = $vote_id;
                    $option_data['voption'] = $vo['voption'];
                    $option_data['vcount'] = $vo['vcount'];
                    $voteoption = $this->Votes->Voteoptions->newEmptyEntity();
                    $voteoption = $this->Votes->Voteoptions->patchEntity($voteoption, $option_data);
                    $this->Votes->Voteoptions->save($voteoption);
                }

                if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                    $this->loadComponent('Uploader');
                    $this->Uploader->uploadImage($_FILES["fileToUpload1"], $vote_id, 'v','','800','jpg');
                }

                $this->Flash->success(__('The vote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vote could not be saved. Please, try again.'));
        }
        $this->set(compact('vote'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vote id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vote = $this->Votes->get($id, [
            'contain' => ['Voteoptions'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            //pr($data);die();
            $vote = $this->Votes->patchEntity($vote, $data);
            if ($this->Votes->save($vote)) {

                foreach($data['Voteoptions'] as $vo){
                    $voteoption = $this->Votes->Voteoptions->get($vo['id'], [
                        'contain' => [],
                    ]);

                    $option_data['id'] = $vo['id'];
                    $option_data['vote_id'] = $id;
                    $option_data['voption'] = $vo['voption'];
                    $option_data['vcount'] = $vo['vcount'];
                    // $voteoption = $this->Voteoptions->patchEntity($voteoption, $this->request->getData());
                    $voteoption = $this->Votes->Voteoptions->patchEntity($voteoption, $option_data);
                    $this->Votes->Voteoptions->save($voteoption);
                }

                if(!empty($_FILES["fileToUpload1"]['tmp_name']) && $_FILES["fileToUpload1"]['error']==0){
                    $this->loadComponent('Uploader');
                    $this->Uploader->uploadImage($_FILES["fileToUpload1"], $vote_id, 'v','','800','jpg');
                }

                $this->Flash->success(__('The vote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vote could not be saved. Please, try again.'));
        }
        $this->set(compact('vote'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vote id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vote = $this->Votes->get($id);
        if ($this->Votes->delete($vote)) {
            $this->Flash->success(__('The vote has been deleted.'));
        } else {
            $this->Flash->error(__('The vote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceLocalities Controller
 *
 * @property \App\Model\Table\ConferenceLocalitiesTable $ConferenceLocalities
 * @method \App\Model\Entity\ConferenceLocality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceLocalitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Localities', 'Users'],
        ];
        $conferenceLocalities = $this->paginate($this->ConferenceLocalities);

        $this->set(compact('conferenceLocalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Locality id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceLocality = $this->ConferenceLocalities->get($id, [
            'contain' => ['Conferences', 'Localities', 'Users', 'ConferenceLocalityRegistrationSteps', 'RegistrationTeamConferenceLocalities'],
        ]);

        $this->set(compact('conferenceLocality'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceLocality = $this->ConferenceLocalities->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceLocality = $this->ConferenceLocalities->patchEntity($conferenceLocality, $this->request->getData());
            if ($this->ConferenceLocalities->save($conferenceLocality)) {
                $this->Flash->success(__('The conference locality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference locality could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceLocalities->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->ConferenceLocalities->Localities->find('list', ['limit' => 200])->all();
        $users = $this->ConferenceLocalities->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceLocality', 'conferences', 'localities', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Locality id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceLocality = $this->ConferenceLocalities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceLocality = $this->ConferenceLocalities->patchEntity($conferenceLocality, $this->request->getData());
            if ($this->ConferenceLocalities->save($conferenceLocality)) {
                $this->Flash->success(__('The conference locality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference locality could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceLocalities->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->ConferenceLocalities->Localities->find('list', ['limit' => 200])->all();
        $users = $this->ConferenceLocalities->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceLocality', 'conferences', 'localities', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Locality id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceLocality = $this->ConferenceLocalities->get($id);
        if ($this->ConferenceLocalities->delete($conferenceLocality)) {
            $this->Flash->success(__('The conference locality has been deleted.'));
        } else {
            $this->Flash->error(__('The conference locality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

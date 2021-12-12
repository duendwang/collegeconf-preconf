<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RegistrationTeamConferenceLocalities Controller
 *
 * @property \App\Model\Table\RegistrationTeamConferenceLocalitiesTable $RegistrationTeamConferenceLocalities
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationTeamConferenceLocalitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RegistrationTeams', 'ConferenceLocalities'],
        ];
        $registrationTeamConferenceLocalities = $this->paginate($this->RegistrationTeamConferenceLocalities);

        $this->set(compact('registrationTeamConferenceLocalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration Team Conference Locality id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->get($id, [
            'contain' => ['RegistrationTeams', 'ConferenceLocalities'],
        ]);

        $this->set(compact('registrationTeamConferenceLocality'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->patchEntity($registrationTeamConferenceLocality, $this->request->getData());
            if ($this->RegistrationTeamConferenceLocalities->save($registrationTeamConferenceLocality)) {
                $this->Flash->success(__('The registration team conference locality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team conference locality could not be saved. Please, try again.'));
        }
        $registrationTeams = $this->RegistrationTeamConferenceLocalities->RegistrationTeams->find('list', ['limit' => 200])->all();
        $conferenceLocalities = $this->RegistrationTeamConferenceLocalities->ConferenceLocalities->find('list', ['limit' => 200])->all();
        $this->set(compact('registrationTeamConferenceLocality', 'registrationTeams', 'conferenceLocalities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration Team Conference Locality id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->patchEntity($registrationTeamConferenceLocality, $this->request->getData());
            if ($this->RegistrationTeamConferenceLocalities->save($registrationTeamConferenceLocality)) {
                $this->Flash->success(__('The registration team conference locality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team conference locality could not be saved. Please, try again.'));
        }
        $registrationTeams = $this->RegistrationTeamConferenceLocalities->RegistrationTeams->find('list', ['limit' => 200])->all();
        $conferenceLocalities = $this->RegistrationTeamConferenceLocalities->ConferenceLocalities->find('list', ['limit' => 200])->all();
        $this->set(compact('registrationTeamConferenceLocality', 'registrationTeams', 'conferenceLocalities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration Team Conference Locality id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrationTeamConferenceLocality = $this->RegistrationTeamConferenceLocalities->get($id);
        if ($this->RegistrationTeamConferenceLocalities->delete($registrationTeamConferenceLocality)) {
            $this->Flash->success(__('The registration team conference locality has been deleted.'));
        } else {
            $this->Flash->error(__('The registration team conference locality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RegistrationTeams Controller
 *
 * @property \App\Model\Table\RegistrationTeamsTable $RegistrationTeams
 * @method \App\Model\Entity\RegistrationTeam[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationTeamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $registrationTeams = $this->paginate($this->RegistrationTeams);

        $this->set(compact('registrationTeams'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration Team id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrationTeam = $this->RegistrationTeams->get($id, [
            'contain' => ['RegistrationTeamConferenceLocalities', 'RegistrationTeamUsers'],
        ]);

        $this->set(compact('registrationTeam'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrationTeam = $this->RegistrationTeams->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrationTeam = $this->RegistrationTeams->patchEntity($registrationTeam, $this->request->getData());
            if ($this->RegistrationTeams->save($registrationTeam)) {
                $this->Flash->success(__('The registration team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationTeam'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration Team id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrationTeam = $this->RegistrationTeams->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrationTeam = $this->RegistrationTeams->patchEntity($registrationTeam, $this->request->getData());
            if ($this->RegistrationTeams->save($registrationTeam)) {
                $this->Flash->success(__('The registration team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationTeam'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration Team id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrationTeam = $this->RegistrationTeams->get($id);
        if ($this->RegistrationTeams->delete($registrationTeam)) {
            $this->Flash->success(__('The registration team has been deleted.'));
        } else {
            $this->Flash->error(__('The registration team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

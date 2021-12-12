<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RegistrationTeamUsers Controller
 *
 * @property \App\Model\Table\RegistrationTeamUsersTable $RegistrationTeamUsers
 * @method \App\Model\Entity\RegistrationTeamUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationTeamUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'RegistrationTeams'],
        ];
        $registrationTeamUsers = $this->paginate($this->RegistrationTeamUsers);

        $this->set(compact('registrationTeamUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration Team User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrationTeamUser = $this->RegistrationTeamUsers->get($id, [
            'contain' => ['Users', 'RegistrationTeams'],
        ]);

        $this->set(compact('registrationTeamUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrationTeamUser = $this->RegistrationTeamUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrationTeamUser = $this->RegistrationTeamUsers->patchEntity($registrationTeamUser, $this->request->getData());
            if ($this->RegistrationTeamUsers->save($registrationTeamUser)) {
                $this->Flash->success(__('The registration team user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team user could not be saved. Please, try again.'));
        }
        $users = $this->RegistrationTeamUsers->Users->find('list', ['limit' => 200])->all();
        $registrationTeams = $this->RegistrationTeamUsers->RegistrationTeams->find('list', ['limit' => 200])->all();
        $this->set(compact('registrationTeamUser', 'users', 'registrationTeams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration Team User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrationTeamUser = $this->RegistrationTeamUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrationTeamUser = $this->RegistrationTeamUsers->patchEntity($registrationTeamUser, $this->request->getData());
            if ($this->RegistrationTeamUsers->save($registrationTeamUser)) {
                $this->Flash->success(__('The registration team user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration team user could not be saved. Please, try again.'));
        }
        $users = $this->RegistrationTeamUsers->Users->find('list', ['limit' => 200])->all();
        $registrationTeams = $this->RegistrationTeamUsers->RegistrationTeams->find('list', ['limit' => 200])->all();
        $this->set(compact('registrationTeamUser', 'users', 'registrationTeams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration Team User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrationTeamUser = $this->RegistrationTeamUsers->get($id);
        if ($this->RegistrationTeamUsers->delete($registrationTeamUser)) {
            $this->Flash->success(__('The registration team user has been deleted.'));
        } else {
            $this->Flash->error(__('The registration team user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

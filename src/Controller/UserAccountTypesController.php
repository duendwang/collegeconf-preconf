<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserAccountTypes Controller
 *
 * @property \App\Model\Table\UserAccountTypesTable $UserAccountTypes
 * @method \App\Model\Entity\UserAccountType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserAccountTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'AccountTypes'],
        ];
        $userAccountTypes = $this->paginate($this->UserAccountTypes);

        $this->set(compact('userAccountTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id User Account Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAccountType = $this->UserAccountTypes->get($id, [
            'contain' => ['Users', 'AccountTypes'],
        ]);

        $this->set(compact('userAccountType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAccountType = $this->UserAccountTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $userAccountType = $this->UserAccountTypes->patchEntity($userAccountType, $this->request->getData());
            if ($this->UserAccountTypes->save($userAccountType)) {
                $this->Flash->success(__('The user account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user account type could not be saved. Please, try again.'));
        }
        $users = $this->UserAccountTypes->Users->find('list', ['limit' => 200])->all();
        $accountTypes = $this->UserAccountTypes->AccountTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('userAccountType', 'users', 'accountTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Account Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAccountType = $this->UserAccountTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAccountType = $this->UserAccountTypes->patchEntity($userAccountType, $this->request->getData());
            if ($this->UserAccountTypes->save($userAccountType)) {
                $this->Flash->success(__('The user account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user account type could not be saved. Please, try again.'));
        }
        $users = $this->UserAccountTypes->Users->find('list', ['limit' => 200])->all();
        $accountTypes = $this->UserAccountTypes->AccountTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('userAccountType', 'users', 'accountTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Account Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAccountType = $this->UserAccountTypes->get($id);
        if ($this->UserAccountTypes->delete($userAccountType)) {
            $this->Flash->success(__('The user account type has been deleted.'));
        } else {
            $this->Flash->error(__('The user account type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

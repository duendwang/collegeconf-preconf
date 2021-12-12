<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceDeadlineAccountTypes Controller
 *
 * @property \App\Model\Table\ConferenceDeadlineAccountTypesTable $ConferenceDeadlineAccountTypes
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceDeadlineAccountTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceDeadlines', 'AccountTypes'],
        ];
        $conferenceDeadlineAccountTypes = $this->paginate($this->ConferenceDeadlineAccountTypes);

        $this->set(compact('conferenceDeadlineAccountTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Deadline Account Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->get($id, [
            'contain' => ['ConferenceDeadlines', 'AccountTypes'],
        ]);

        $this->set(compact('conferenceDeadlineAccountType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->patchEntity($conferenceDeadlineAccountType, $this->request->getData());
            if ($this->ConferenceDeadlineAccountTypes->save($conferenceDeadlineAccountType)) {
                $this->Flash->success(__('The conference deadline account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline account type could not be saved. Please, try again.'));
        }
        $conferenceDeadlines = $this->ConferenceDeadlineAccountTypes->ConferenceDeadlines->find('list', ['limit' => 200])->all();
        $accountTypes = $this->ConferenceDeadlineAccountTypes->AccountTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceDeadlineAccountType', 'conferenceDeadlines', 'accountTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Deadline Account Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->patchEntity($conferenceDeadlineAccountType, $this->request->getData());
            if ($this->ConferenceDeadlineAccountTypes->save($conferenceDeadlineAccountType)) {
                $this->Flash->success(__('The conference deadline account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline account type could not be saved. Please, try again.'));
        }
        $conferenceDeadlines = $this->ConferenceDeadlineAccountTypes->ConferenceDeadlines->find('list', ['limit' => 200])->all();
        $accountTypes = $this->ConferenceDeadlineAccountTypes->AccountTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceDeadlineAccountType', 'conferenceDeadlines', 'accountTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Deadline Account Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceDeadlineAccountType = $this->ConferenceDeadlineAccountTypes->get($id);
        if ($this->ConferenceDeadlineAccountTypes->delete($conferenceDeadlineAccountType)) {
            $this->Flash->success(__('The conference deadline account type has been deleted.'));
        } else {
            $this->Flash->error(__('The conference deadline account type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

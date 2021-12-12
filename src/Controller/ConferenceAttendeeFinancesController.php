<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceAttendeeFinances Controller
 *
 * @property \App\Model\Table\ConferenceAttendeeFinancesTable $ConferenceAttendeeFinances
 * @method \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceAttendeeFinancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Finances', 'ConferenceAttendees'],
        ];
        $conferenceAttendeeFinances = $this->paginate($this->ConferenceAttendeeFinances);

        $this->set(compact('conferenceAttendeeFinances'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Attendee Finance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->get($id, [
            'contain' => ['Finances', 'ConferenceAttendees'],
        ]);

        $this->set(compact('conferenceAttendeeFinance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->patchEntity($conferenceAttendeeFinance, $this->request->getData());
            if ($this->ConferenceAttendeeFinances->save($conferenceAttendeeFinance)) {
                $this->Flash->success(__('The conference attendee finance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee finance could not be saved. Please, try again.'));
        }
        $finances = $this->ConferenceAttendeeFinances->Finances->find('list', ['limit' => 200])->all();
        $conferenceAttendees = $this->ConferenceAttendeeFinances->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendeeFinance', 'finances', 'conferenceAttendees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Attendee Finance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->patchEntity($conferenceAttendeeFinance, $this->request->getData());
            if ($this->ConferenceAttendeeFinances->save($conferenceAttendeeFinance)) {
                $this->Flash->success(__('The conference attendee finance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee finance could not be saved. Please, try again.'));
        }
        $finances = $this->ConferenceAttendeeFinances->Finances->find('list', ['limit' => 200])->all();
        $conferenceAttendees = $this->ConferenceAttendeeFinances->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendeeFinance', 'finances', 'conferenceAttendees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Attendee Finance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceAttendeeFinance = $this->ConferenceAttendeeFinances->get($id);
        if ($this->ConferenceAttendeeFinances->delete($conferenceAttendeeFinance)) {
            $this->Flash->success(__('The conference attendee finance has been deleted.'));
        } else {
            $this->Flash->error(__('The conference attendee finance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

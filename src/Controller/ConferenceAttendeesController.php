<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceAttendees Controller
 *
 * @property \App\Model\Table\ConferenceAttendeesTable $ConferenceAttendees
 * @method \App\Model\Entity\ConferenceAttendee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceAttendeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Attendees', 'Barcodes', 'Lodgings'],
        ];
        $conferenceAttendees = $this->paginate($this->ConferenceAttendees);

        $this->set(compact('conferenceAttendees'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Attendee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceAttendee = $this->ConferenceAttendees->get($id, [
            'contain' => ['Conferences', 'Attendees', 'Barcodes', 'Lodgings', 'Cancels', 'CheckIns', 'ConferenceAttendeeConferenceEvents', 'OnsiteRegistrations', 'Payments'],
        ]);

        $this->set(compact('conferenceAttendee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceAttendee = $this->ConferenceAttendees->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceAttendee = $this->ConferenceAttendees->patchEntity($conferenceAttendee, $this->request->getData());
            if ($this->ConferenceAttendees->save($conferenceAttendee)) {
                $this->Flash->success(__('The conference attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceAttendees->Conferences->find('list', ['limit' => 200])->all();
        $attendees = $this->ConferenceAttendees->Attendees->find('list', ['limit' => 200])->all();
        $barcodes = $this->ConferenceAttendees->Barcodes->find('list', ['limit' => 200])->all();
        $lodgings = $this->ConferenceAttendees->Lodgings->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendee', 'conferences', 'attendees', 'barcodes', 'lodgings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Attendee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceAttendee = $this->ConferenceAttendees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceAttendee = $this->ConferenceAttendees->patchEntity($conferenceAttendee, $this->request->getData());
            if ($this->ConferenceAttendees->save($conferenceAttendee)) {
                $this->Flash->success(__('The conference attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceAttendees->Conferences->find('list', ['limit' => 200])->all();
        $attendees = $this->ConferenceAttendees->Attendees->find('list', ['limit' => 200])->all();
        $barcodes = $this->ConferenceAttendees->Barcodes->find('list', ['limit' => 200])->all();
        $lodgings = $this->ConferenceAttendees->Lodgings->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendee', 'conferences', 'attendees', 'barcodes', 'lodgings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Attendee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceAttendee = $this->ConferenceAttendees->get($id);
        if ($this->ConferenceAttendees->delete($conferenceAttendee)) {
            $this->Flash->success(__('The conference attendee has been deleted.'));
        } else {
            $this->Flash->error(__('The conference attendee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

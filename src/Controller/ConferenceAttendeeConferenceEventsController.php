<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceAttendeeConferenceEvents Controller
 *
 * @property \App\Model\Table\ConferenceAttendeeConferenceEventsTable $ConferenceAttendeeConferenceEvents
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceAttendeeConferenceEventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceAttendees', 'ConferenceEvents'],
        ];
        $conferenceAttendeeConferenceEvents = $this->paginate($this->ConferenceAttendeeConferenceEvents);

        $this->set(compact('conferenceAttendeeConferenceEvents'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Attendee Conference Event id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->get($id, [
            'contain' => ['ConferenceAttendees', 'ConferenceEvents'],
        ]);

        $this->set(compact('conferenceAttendeeConferenceEvent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->patchEntity($conferenceAttendeeConferenceEvent, $this->request->getData());
            if ($this->ConferenceAttendeeConferenceEvents->save($conferenceAttendeeConferenceEvent)) {
                $this->Flash->success(__('The conference attendee conference event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee conference event could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->ConferenceAttendeeConferenceEvents->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $conferenceEvents = $this->ConferenceAttendeeConferenceEvents->ConferenceEvents->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendeeConferenceEvent', 'conferenceAttendees', 'conferenceEvents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Attendee Conference Event id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->patchEntity($conferenceAttendeeConferenceEvent, $this->request->getData());
            if ($this->ConferenceAttendeeConferenceEvents->save($conferenceAttendeeConferenceEvent)) {
                $this->Flash->success(__('The conference attendee conference event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference attendee conference event could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->ConferenceAttendeeConferenceEvents->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $conferenceEvents = $this->ConferenceAttendeeConferenceEvents->ConferenceEvents->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceAttendeeConferenceEvent', 'conferenceAttendees', 'conferenceEvents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Attendee Conference Event id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceAttendeeConferenceEvent = $this->ConferenceAttendeeConferenceEvents->get($id);
        if ($this->ConferenceAttendeeConferenceEvents->delete($conferenceAttendeeConferenceEvent)) {
            $this->Flash->success(__('The conference attendee conference event has been deleted.'));
        } else {
            $this->Flash->error(__('The conference attendee conference event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

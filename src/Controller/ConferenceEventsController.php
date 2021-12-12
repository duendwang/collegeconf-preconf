<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceEvents Controller
 *
 * @property \App\Model\Table\ConferenceEventsTable $ConferenceEvents
 * @method \App\Model\Entity\ConferenceEvent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceEventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Events'],
        ];
        $conferenceEvents = $this->paginate($this->ConferenceEvents);

        $this->set(compact('conferenceEvents'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Event id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceEvent = $this->ConferenceEvents->get($id, [
            'contain' => ['Conferences', 'Events', 'ConferenceAttendeeConferenceEvents'],
        ]);

        $this->set(compact('conferenceEvent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceEvent = $this->ConferenceEvents->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceEvent = $this->ConferenceEvents->patchEntity($conferenceEvent, $this->request->getData());
            if ($this->ConferenceEvents->save($conferenceEvent)) {
                $this->Flash->success(__('The conference event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference event could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceEvents->Conferences->find('list', ['limit' => 200])->all();
        $events = $this->ConferenceEvents->Events->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceEvent', 'conferences', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Event id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceEvent = $this->ConferenceEvents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceEvent = $this->ConferenceEvents->patchEntity($conferenceEvent, $this->request->getData());
            if ($this->ConferenceEvents->save($conferenceEvent)) {
                $this->Flash->success(__('The conference event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference event could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceEvents->Conferences->find('list', ['limit' => 200])->all();
        $events = $this->ConferenceEvents->Events->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceEvent', 'conferences', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Event id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceEvent = $this->ConferenceEvents->get($id);
        if ($this->ConferenceEvents->delete($conferenceEvent)) {
            $this->Flash->success(__('The conference event has been deleted.'));
        } else {
            $this->Flash->error(__('The conference event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

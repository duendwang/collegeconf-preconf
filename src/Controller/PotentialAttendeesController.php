<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PotentialAttendees Controller
 *
 * @property \App\Model\Table\PotentialAttendeesTable $PotentialAttendees
 * @method \App\Model\Entity\PotentialAttendee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PotentialAttendeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Localities', 'Campuses', 'Statuses'],
        ];
        $potentialAttendees = $this->paginate($this->PotentialAttendees);

        $this->set(compact('potentialAttendees'));
    }

    /**
     * View method
     *
     * @param string|null $id Potential Attendee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $potentialAttendee = $this->PotentialAttendees->get($id, [
            'contain' => ['Conferences', 'Localities', 'Campuses', 'Statuses'],
        ]);

        $this->set(compact('potentialAttendee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $potentialAttendee = $this->PotentialAttendees->newEmptyEntity();
        if ($this->request->is('post')) {
            $potentialAttendee = $this->PotentialAttendees->patchEntity($potentialAttendee, $this->request->getData());
            if ($this->PotentialAttendees->save($potentialAttendee)) {
                $this->Flash->success(__('The potential attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The potential attendee could not be saved. Please, try again.'));
        }
        $conferences = $this->PotentialAttendees->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->PotentialAttendees->Localities->find('list', ['limit' => 200])->all();
        $campuses = $this->PotentialAttendees->Campuses->find('list', ['limit' => 200])->all();
        $statuses = $this->PotentialAttendees->Statuses->find('list', ['limit' => 200])->all();
        $this->set(compact('potentialAttendee', 'conferences', 'localities', 'campuses', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Potential Attendee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $potentialAttendee = $this->PotentialAttendees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $potentialAttendee = $this->PotentialAttendees->patchEntity($potentialAttendee, $this->request->getData());
            if ($this->PotentialAttendees->save($potentialAttendee)) {
                $this->Flash->success(__('The potential attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The potential attendee could not be saved. Please, try again.'));
        }
        $conferences = $this->PotentialAttendees->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->PotentialAttendees->Localities->find('list', ['limit' => 200])->all();
        $campuses = $this->PotentialAttendees->Campuses->find('list', ['limit' => 200])->all();
        $statuses = $this->PotentialAttendees->Statuses->find('list', ['limit' => 200])->all();
        $this->set(compact('potentialAttendee', 'conferences', 'localities', 'campuses', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Potential Attendee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $potentialAttendee = $this->PotentialAttendees->get($id);
        if ($this->PotentialAttendees->delete($potentialAttendee)) {
            $this->Flash->success(__('The potential attendee has been deleted.'));
        } else {
            $this->Flash->error(__('The potential attendee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OnsiteRegistrations Controller
 *
 * @property \App\Model\Table\OnsiteRegistrationsTable $OnsiteRegistrations
 * @method \App\Model\Entity\OnsiteRegistration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OnsiteRegistrationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceAttendees', 'Localities'],
        ];
        $onsiteRegistrations = $this->paginate($this->OnsiteRegistrations);

        $this->set(compact('onsiteRegistrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Onsite Registration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $onsiteRegistration = $this->OnsiteRegistrations->get($id, [
            'contain' => ['ConferenceAttendees', 'Localities'],
        ]);

        $this->set(compact('onsiteRegistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $onsiteRegistration = $this->OnsiteRegistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $onsiteRegistration = $this->OnsiteRegistrations->patchEntity($onsiteRegistration, $this->request->getData());
            if ($this->OnsiteRegistrations->save($onsiteRegistration)) {
                $this->Flash->success(__('The onsite registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The onsite registration could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->OnsiteRegistrations->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $localities = $this->OnsiteRegistrations->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('onsiteRegistration', 'conferenceAttendees', 'localities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Onsite Registration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $onsiteRegistration = $this->OnsiteRegistrations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $onsiteRegistration = $this->OnsiteRegistrations->patchEntity($onsiteRegistration, $this->request->getData());
            if ($this->OnsiteRegistrations->save($onsiteRegistration)) {
                $this->Flash->success(__('The onsite registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The onsite registration could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->OnsiteRegistrations->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $localities = $this->OnsiteRegistrations->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('onsiteRegistration', 'conferenceAttendees', 'localities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Onsite Registration id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $onsiteRegistration = $this->OnsiteRegistrations->get($id);
        if ($this->OnsiteRegistrations->delete($onsiteRegistration)) {
            $this->Flash->success(__('The onsite registration has been deleted.'));
        } else {
            $this->Flash->error(__('The onsite registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

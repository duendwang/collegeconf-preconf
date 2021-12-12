<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceLocations Controller
 *
 * @property \App\Model\Table\ConferenceLocationsTable $ConferenceLocations
 * @method \App\Model\Entity\ConferenceLocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceLocationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $conferenceLocations = $this->paginate($this->ConferenceLocations);

        $this->set(compact('conferenceLocations'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Location id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceLocation = $this->ConferenceLocations->get($id, [
            'contain' => ['Conferences', 'LodgingFacilities', 'Rates'],
        ]);

        $this->set(compact('conferenceLocation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceLocation = $this->ConferenceLocations->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceLocation = $this->ConferenceLocations->patchEntity($conferenceLocation, $this->request->getData());
            if ($this->ConferenceLocations->save($conferenceLocation)) {
                $this->Flash->success(__('The conference location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference location could not be saved. Please, try again.'));
        }
        $this->set(compact('conferenceLocation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Location id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceLocation = $this->ConferenceLocations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceLocation = $this->ConferenceLocations->patchEntity($conferenceLocation, $this->request->getData());
            if ($this->ConferenceLocations->save($conferenceLocation)) {
                $this->Flash->success(__('The conference location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference location could not be saved. Please, try again.'));
        }
        $this->set(compact('conferenceLocation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Location id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceLocation = $this->ConferenceLocations->get($id);
        if ($this->ConferenceLocations->delete($conferenceLocation)) {
            $this->Flash->success(__('The conference location has been deleted.'));
        } else {
            $this->Flash->error(__('The conference location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

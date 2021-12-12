<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LodgingFacilities Controller
 *
 * @property \App\Model\Table\LodgingFacilitiesTable $LodgingFacilities
 * @method \App\Model\Entity\LodgingFacility[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LodgingFacilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceLocations'],
        ];
        $lodgingFacilities = $this->paginate($this->LodgingFacilities);

        $this->set(compact('lodgingFacilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Lodging Facility id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lodgingFacility = $this->LodgingFacilities->get($id, [
            'contain' => ['ConferenceLocations'],
        ]);

        $this->set(compact('lodgingFacility'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lodgingFacility = $this->LodgingFacilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $lodgingFacility = $this->LodgingFacilities->patchEntity($lodgingFacility, $this->request->getData());
            if ($this->LodgingFacilities->save($lodgingFacility)) {
                $this->Flash->success(__('The lodging facility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lodging facility could not be saved. Please, try again.'));
        }
        $conferenceLocations = $this->LodgingFacilities->ConferenceLocations->find('list', ['limit' => 200])->all();
        $this->set(compact('lodgingFacility', 'conferenceLocations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lodging Facility id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lodgingFacility = $this->LodgingFacilities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lodgingFacility = $this->LodgingFacilities->patchEntity($lodgingFacility, $this->request->getData());
            if ($this->LodgingFacilities->save($lodgingFacility)) {
                $this->Flash->success(__('The lodging facility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lodging facility could not be saved. Please, try again.'));
        }
        $conferenceLocations = $this->LodgingFacilities->ConferenceLocations->find('list', ['limit' => 200])->all();
        $this->set(compact('lodgingFacility', 'conferenceLocations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lodging Facility id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lodgingFacility = $this->LodgingFacilities->get($id);
        if ($this->LodgingFacilities->delete($lodgingFacility)) {
            $this->Flash->success(__('The lodging facility has been deleted.'));
        } else {
            $this->Flash->error(__('The lodging facility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

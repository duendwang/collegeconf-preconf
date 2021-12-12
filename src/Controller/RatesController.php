<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rates Controller
 *
 * @property \App\Model\Table\RatesTable $Rates
 * @method \App\Model\Entity\Rate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceLocations', 'RateTypes'],
        ];
        $rates = $this->paginate($this->Rates);

        $this->set(compact('rates'));
    }

    /**
     * View method
     *
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rate = $this->Rates->get($id, [
            'contain' => ['ConferenceLocations', 'RateTypes'],
        ]);

        $this->set(compact('rate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rate = $this->Rates->newEmptyEntity();
        if ($this->request->is('post')) {
            $rate = $this->Rates->patchEntity($rate, $this->request->getData());
            if ($this->Rates->save($rate)) {
                $this->Flash->success(__('The rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rate could not be saved. Please, try again.'));
        }
        $conferenceLocations = $this->Rates->ConferenceLocations->find('list', ['limit' => 200])->all();
        $rateTypes = $this->Rates->RateTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('rate', 'conferenceLocations', 'rateTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rate = $this->Rates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rate = $this->Rates->patchEntity($rate, $this->request->getData());
            if ($this->Rates->save($rate)) {
                $this->Flash->success(__('The rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rate could not be saved. Please, try again.'));
        }
        $conferenceLocations = $this->Rates->ConferenceLocations->find('list', ['limit' => 200])->all();
        $rateTypes = $this->Rates->RateTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('rate', 'conferenceLocations', 'rateTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rate = $this->Rates->get($id);
        if ($this->Rates->delete($rate)) {
            $this->Flash->success(__('The rate has been deleted.'));
        } else {
            $this->Flash->error(__('The rate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

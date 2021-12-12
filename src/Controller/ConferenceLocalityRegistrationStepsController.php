<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceLocalityRegistrationSteps Controller
 *
 * @property \App\Model\Table\ConferenceLocalityRegistrationStepsTable $ConferenceLocalityRegistrationSteps
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceLocalityRegistrationStepsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceLocalities', 'RegistrationSteps'],
        ];
        $conferenceLocalityRegistrationSteps = $this->paginate($this->ConferenceLocalityRegistrationSteps);

        $this->set(compact('conferenceLocalityRegistrationSteps'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Locality Registration Step id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->get($id, [
            'contain' => ['ConferenceLocalities', 'RegistrationSteps'],
        ]);

        $this->set(compact('conferenceLocalityRegistrationStep'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->patchEntity($conferenceLocalityRegistrationStep, $this->request->getData());
            if ($this->ConferenceLocalityRegistrationSteps->save($conferenceLocalityRegistrationStep)) {
                $this->Flash->success(__('The conference locality registration step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference locality registration step could not be saved. Please, try again.'));
        }
        $conferenceLocalities = $this->ConferenceLocalityRegistrationSteps->ConferenceLocalities->find('list', ['limit' => 200])->all();
        $registrationSteps = $this->ConferenceLocalityRegistrationSteps->RegistrationSteps->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceLocalityRegistrationStep', 'conferenceLocalities', 'registrationSteps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Locality Registration Step id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->patchEntity($conferenceLocalityRegistrationStep, $this->request->getData());
            if ($this->ConferenceLocalityRegistrationSteps->save($conferenceLocalityRegistrationStep)) {
                $this->Flash->success(__('The conference locality registration step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference locality registration step could not be saved. Please, try again.'));
        }
        $conferenceLocalities = $this->ConferenceLocalityRegistrationSteps->ConferenceLocalities->find('list', ['limit' => 200])->all();
        $registrationSteps = $this->ConferenceLocalityRegistrationSteps->RegistrationSteps->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceLocalityRegistrationStep', 'conferenceLocalities', 'registrationSteps'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Locality Registration Step id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceLocalityRegistrationStep = $this->ConferenceLocalityRegistrationSteps->get($id);
        if ($this->ConferenceLocalityRegistrationSteps->delete($conferenceLocalityRegistrationStep)) {
            $this->Flash->success(__('The conference locality registration step has been deleted.'));
        } else {
            $this->Flash->error(__('The conference locality registration step could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RegistrationSteps Controller
 *
 * @property \App\Model\Table\RegistrationStepsTable $RegistrationSteps
 * @method \App\Model\Entity\RegistrationStep[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationStepsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $registrationSteps = $this->paginate($this->RegistrationSteps);

        $this->set(compact('registrationSteps'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration Step id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrationStep = $this->RegistrationSteps->get($id, [
            'contain' => ['ConferenceLocalityRegistrationSteps'],
        ]);

        $this->set(compact('registrationStep'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrationStep = $this->RegistrationSteps->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrationStep = $this->RegistrationSteps->patchEntity($registrationStep, $this->request->getData());
            if ($this->RegistrationSteps->save($registrationStep)) {
                $this->Flash->success(__('The registration step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration step could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationStep'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration Step id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrationStep = $this->RegistrationSteps->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrationStep = $this->RegistrationSteps->patchEntity($registrationStep, $this->request->getData());
            if ($this->RegistrationSteps->save($registrationStep)) {
                $this->Flash->success(__('The registration step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration step could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationStep'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration Step id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrationStep = $this->RegistrationSteps->get($id);
        if ($this->RegistrationSteps->delete($registrationStep)) {
            $this->Flash->success(__('The registration step has been deleted.'));
        } else {
            $this->Flash->error(__('The registration step could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

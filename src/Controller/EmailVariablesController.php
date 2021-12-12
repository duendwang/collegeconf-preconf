<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmailVariables Controller
 *
 * @property \App\Model\Table\EmailVariablesTable $EmailVariables
 * @method \App\Model\Entity\EmailVariable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailVariablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $emailVariables = $this->paginate($this->EmailVariables);

        $this->set(compact('emailVariables'));
    }

    /**
     * View method
     *
     * @param string|null $id Email Variable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailVariable = $this->EmailVariables->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('emailVariable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailVariable = $this->EmailVariables->newEmptyEntity();
        if ($this->request->is('post')) {
            $emailVariable = $this->EmailVariables->patchEntity($emailVariable, $this->request->getData());
            if ($this->EmailVariables->save($emailVariable)) {
                $this->Flash->success(__('The email variable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email variable could not be saved. Please, try again.'));
        }
        $this->set(compact('emailVariable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Variable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailVariable = $this->EmailVariables->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailVariable = $this->EmailVariables->patchEntity($emailVariable, $this->request->getData());
            if ($this->EmailVariables->save($emailVariable)) {
                $this->Flash->success(__('The email variable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email variable could not be saved. Please, try again.'));
        }
        $this->set(compact('emailVariable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Variable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailVariable = $this->EmailVariables->get($id);
        if ($this->EmailVariables->delete($emailVariable)) {
            $this->Flash->success(__('The email variable has been deleted.'));
        } else {
            $this->Flash->error(__('The email variable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

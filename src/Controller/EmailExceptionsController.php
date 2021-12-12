<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmailExceptions Controller
 *
 * @property \App\Model\Table\EmailExceptionsTable $EmailExceptions
 * @method \App\Model\Entity\EmailException[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailExceptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emails', 'Conferences'],
        ];
        $emailExceptions = $this->paginate($this->EmailExceptions);

        $this->set(compact('emailExceptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Email Exception id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailException = $this->EmailExceptions->get($id, [
            'contain' => ['Emails', 'Conferences'],
        ]);

        $this->set(compact('emailException'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailException = $this->EmailExceptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $emailException = $this->EmailExceptions->patchEntity($emailException, $this->request->getData());
            if ($this->EmailExceptions->save($emailException)) {
                $this->Flash->success(__('The email exception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email exception could not be saved. Please, try again.'));
        }
        $emails = $this->EmailExceptions->Emails->find('list', ['limit' => 200])->all();
        $conferences = $this->EmailExceptions->Conferences->find('list', ['limit' => 200])->all();
        $this->set(compact('emailException', 'emails', 'conferences'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Exception id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailException = $this->EmailExceptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailException = $this->EmailExceptions->patchEntity($emailException, $this->request->getData());
            if ($this->EmailExceptions->save($emailException)) {
                $this->Flash->success(__('The email exception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email exception could not be saved. Please, try again.'));
        }
        $emails = $this->EmailExceptions->Emails->find('list', ['limit' => 200])->all();
        $conferences = $this->EmailExceptions->Conferences->find('list', ['limit' => 200])->all();
        $this->set(compact('emailException', 'emails', 'conferences'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Exception id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailException = $this->EmailExceptions->get($id);
        if ($this->EmailExceptions->delete($emailException)) {
            $this->Flash->success(__('The email exception has been deleted.'));
        } else {
            $this->Flash->error(__('The email exception could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

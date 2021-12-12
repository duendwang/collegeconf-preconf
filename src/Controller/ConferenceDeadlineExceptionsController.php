<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceDeadlineExceptions Controller
 *
 * @property \App\Model\Table\ConferenceDeadlineExceptionsTable $ConferenceDeadlineExceptions
 * @method \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceDeadlineExceptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'ConferenceDeadlines'],
        ];
        $conferenceDeadlineExceptions = $this->paginate($this->ConferenceDeadlineExceptions);

        $this->set(compact('conferenceDeadlineExceptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Deadline Exception id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->get($id, [
            'contain' => ['Conferences', 'ConferenceDeadlines'],
        ]);

        $this->set(compact('conferenceDeadlineException'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->patchEntity($conferenceDeadlineException, $this->request->getData());
            if ($this->ConferenceDeadlineExceptions->save($conferenceDeadlineException)) {
                $this->Flash->success(__('The conference deadline exception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline exception could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceDeadlineExceptions->Conferences->find('list', ['limit' => 200])->all();
        $conferenceDeadlines = $this->ConferenceDeadlineExceptions->ConferenceDeadlines->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceDeadlineException', 'conferences', 'conferenceDeadlines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Deadline Exception id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->patchEntity($conferenceDeadlineException, $this->request->getData());
            if ($this->ConferenceDeadlineExceptions->save($conferenceDeadlineException)) {
                $this->Flash->success(__('The conference deadline exception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline exception could not be saved. Please, try again.'));
        }
        $conferences = $this->ConferenceDeadlineExceptions->Conferences->find('list', ['limit' => 200])->all();
        $conferenceDeadlines = $this->ConferenceDeadlineExceptions->ConferenceDeadlines->find('list', ['limit' => 200])->all();
        $this->set(compact('conferenceDeadlineException', 'conferences', 'conferenceDeadlines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Deadline Exception id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceDeadlineException = $this->ConferenceDeadlineExceptions->get($id);
        if ($this->ConferenceDeadlineExceptions->delete($conferenceDeadlineException)) {
            $this->Flash->success(__('The conference deadline exception has been deleted.'));
        } else {
            $this->Flash->error(__('The conference deadline exception could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

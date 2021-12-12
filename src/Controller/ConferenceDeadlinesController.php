<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ConferenceDeadlines Controller
 *
 * @property \App\Model\Table\ConferenceDeadlinesTable $ConferenceDeadlines
 * @method \App\Model\Entity\ConferenceDeadline[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferenceDeadlinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $conferenceDeadlines = $this->paginate($this->ConferenceDeadlines);

        $this->set(compact('conferenceDeadlines'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference Deadline id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conferenceDeadline = $this->ConferenceDeadlines->get($id, [
            'contain' => ['ConferenceDeadlineAccountTypes', 'ConferenceDeadlineExceptions'],
        ]);

        $this->set(compact('conferenceDeadline'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conferenceDeadline = $this->ConferenceDeadlines->newEmptyEntity();
        if ($this->request->is('post')) {
            $conferenceDeadline = $this->ConferenceDeadlines->patchEntity($conferenceDeadline, $this->request->getData());
            if ($this->ConferenceDeadlines->save($conferenceDeadline)) {
                $this->Flash->success(__('The conference deadline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline could not be saved. Please, try again.'));
        }
        $this->set(compact('conferenceDeadline'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference Deadline id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conferenceDeadline = $this->ConferenceDeadlines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferenceDeadline = $this->ConferenceDeadlines->patchEntity($conferenceDeadline, $this->request->getData());
            if ($this->ConferenceDeadlines->save($conferenceDeadline)) {
                $this->Flash->success(__('The conference deadline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference deadline could not be saved. Please, try again.'));
        }
        $this->set(compact('conferenceDeadline'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference Deadline id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferenceDeadline = $this->ConferenceDeadlines->get($id);
        if ($this->ConferenceDeadlines->delete($conferenceDeadline)) {
            $this->Flash->success(__('The conference deadline has been deleted.'));
        } else {
            $this->Flash->error(__('The conference deadline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

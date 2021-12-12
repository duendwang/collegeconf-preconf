<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cancels Controller
 *
 * @property \App\Model\Table\CancelsTable $Cancels
 * @method \App\Model\Entity\Cancel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CancelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConferenceAttendees'],
        ];
        $cancels = $this->paginate($this->Cancels);

        $this->set(compact('cancels'));
    }

    /**
     * View method
     *
     * @param string|null $id Cancel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cancel = $this->Cancels->get($id, [
            'contain' => ['ConferenceAttendees'],
        ]);

        $this->set(compact('cancel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cancel = $this->Cancels->newEmptyEntity();
        if ($this->request->is('post')) {
            $cancel = $this->Cancels->patchEntity($cancel, $this->request->getData());
            if ($this->Cancels->save($cancel)) {
                $this->Flash->success(__('The cancel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cancel could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->Cancels->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $this->set(compact('cancel', 'conferenceAttendees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cancel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cancel = $this->Cancels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cancel = $this->Cancels->patchEntity($cancel, $this->request->getData());
            if ($this->Cancels->save($cancel)) {
                $this->Flash->success(__('The cancel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cancel could not be saved. Please, try again.'));
        }
        $conferenceAttendees = $this->Cancels->ConferenceAttendees->find('list', ['limit' => 200])->all();
        $this->set(compact('cancel', 'conferenceAttendees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cancel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cancel = $this->Cancels->get($id);
        if ($this->Cancels->delete($cancel)) {
            $this->Flash->success(__('The cancel has been deleted.'));
        } else {
            $this->Flash->error(__('The cancel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

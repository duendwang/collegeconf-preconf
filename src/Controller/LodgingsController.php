<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lodgings Controller
 *
 * @property \App\Model\Table\LodgingsTable $Lodgings
 * @method \App\Model\Entity\Lodging[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LodgingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Localities'],
        ];
        $lodgings = $this->paginate($this->Lodgings);

        $this->set(compact('lodgings'));
    }

    /**
     * View method
     *
     * @param string|null $id Lodging id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lodging = $this->Lodgings->get($id, [
            'contain' => ['Conferences', 'Localities', 'ConferenceAttendees'],
        ]);

        $this->set(compact('lodging'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lodging = $this->Lodgings->newEmptyEntity();
        if ($this->request->is('post')) {
            $lodging = $this->Lodgings->patchEntity($lodging, $this->request->getData());
            if ($this->Lodgings->save($lodging)) {
                $this->Flash->success(__('The lodging has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lodging could not be saved. Please, try again.'));
        }
        $conferences = $this->Lodgings->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->Lodgings->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('lodging', 'conferences', 'localities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lodging id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lodging = $this->Lodgings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lodging = $this->Lodgings->patchEntity($lodging, $this->request->getData());
            if ($this->Lodgings->save($lodging)) {
                $this->Flash->success(__('The lodging has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lodging could not be saved. Please, try again.'));
        }
        $conferences = $this->Lodgings->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->Lodgings->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('lodging', 'conferences', 'localities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lodging id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lodging = $this->Lodgings->get($id);
        if ($this->Lodgings->delete($lodging)) {
            $this->Flash->success(__('The lodging has been deleted.'));
        } else {
            $this->Flash->error(__('The lodging could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

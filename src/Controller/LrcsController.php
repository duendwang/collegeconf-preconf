<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lrcs Controller
 *
 * @property \App\Model\Table\LrcsTable $Lrcs
 * @method \App\Model\Entity\Lrc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LrcsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Localities'],
        ];
        $lrcs = $this->paginate($this->Lrcs);

        $this->set(compact('lrcs'));
    }

    /**
     * View method
     *
     * @param string|null $id Lrc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lrc = $this->Lrcs->get($id, [
            'contain' => ['Localities'],
        ]);

        $this->set(compact('lrc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lrc = $this->Lrcs->newEmptyEntity();
        if ($this->request->is('post')) {
            $lrc = $this->Lrcs->patchEntity($lrc, $this->request->getData());
            if ($this->Lrcs->save($lrc)) {
                $this->Flash->success(__('The lrc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lrc could not be saved. Please, try again.'));
        }
        $localities = $this->Lrcs->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('lrc', 'localities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lrc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lrc = $this->Lrcs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lrc = $this->Lrcs->patchEntity($lrc, $this->request->getData());
            if ($this->Lrcs->save($lrc)) {
                $this->Flash->success(__('The lrc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lrc could not be saved. Please, try again.'));
        }
        $localities = $this->Lrcs->Localities->find('list', ['limit' => 200])->all();
        $this->set(compact('lrc', 'localities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lrc id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lrc = $this->Lrcs->get($id);
        if ($this->Lrcs->delete($lrc)) {
            $this->Flash->success(__('The lrc has been deleted.'));
        } else {
            $this->Flash->error(__('The lrc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

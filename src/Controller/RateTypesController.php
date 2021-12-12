<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RateTypes Controller
 *
 * @property \App\Model\Table\RateTypesTable $RateTypes
 * @method \App\Model\Entity\RateType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RateTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rateTypes = $this->paginate($this->RateTypes);

        $this->set(compact('rateTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rateType = $this->RateTypes->get($id, [
            'contain' => ['Rates'],
        ]);

        $this->set(compact('rateType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rateType = $this->RateTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $rateType = $this->RateTypes->patchEntity($rateType, $this->request->getData());
            if ($this->RateTypes->save($rateType)) {
                $this->Flash->success(__('The rate type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rate type could not be saved. Please, try again.'));
        }
        $this->set(compact('rateType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rateType = $this->RateTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rateType = $this->RateTypes->patchEntity($rateType, $this->request->getData());
            if ($this->RateTypes->save($rateType)) {
                $this->Flash->success(__('The rate type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rate type could not be saved. Please, try again.'));
        }
        $this->set(compact('rateType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rateType = $this->RateTypes->get($id);
        if ($this->RateTypes->delete($rateType)) {
            $this->Flash->success(__('The rate type has been deleted.'));
        } else {
            $this->Flash->error(__('The rate type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

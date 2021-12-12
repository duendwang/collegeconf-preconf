<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Finances Controller
 *
 * @property \App\Model\Table\FinancesTable $Finances
 * @method \App\Model\Entity\Finance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FinancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conferences', 'Localities', 'FinanceTypes'],
        ];
        $finances = $this->paginate($this->Finances);

        $this->set(compact('finances'));
    }

    /**
     * View method
     *
     * @param string|null $id Finance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $finance = $this->Finances->get($id, [
            'contain' => ['Conferences', 'Localities', 'FinanceTypes', 'ConferenceAttendeeFinances'],
        ]);

        $this->set(compact('finance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $finance = $this->Finances->newEmptyEntity();
        if ($this->request->is('post')) {
            $finance = $this->Finances->patchEntity($finance, $this->request->getData());
            if ($this->Finances->save($finance)) {
                $this->Flash->success(__('The finance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The finance could not be saved. Please, try again.'));
        }
        $conferences = $this->Finances->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->Finances->Localities->find('list', ['limit' => 200])->all();
        $financeTypes = $this->Finances->FinanceTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('finance', 'conferences', 'localities', 'financeTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Finance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $finance = $this->Finances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $finance = $this->Finances->patchEntity($finance, $this->request->getData());
            if ($this->Finances->save($finance)) {
                $this->Flash->success(__('The finance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The finance could not be saved. Please, try again.'));
        }
        $conferences = $this->Finances->Conferences->find('list', ['limit' => 200])->all();
        $localities = $this->Finances->Localities->find('list', ['limit' => 200])->all();
        $financeTypes = $this->Finances->FinanceTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('finance', 'conferences', 'localities', 'financeTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Finance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $finance = $this->Finances->get($id);
        if ($this->Finances->delete($finance)) {
            $this->Flash->success(__('The finance has been deleted.'));
        } else {
            $this->Flash->error(__('The finance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

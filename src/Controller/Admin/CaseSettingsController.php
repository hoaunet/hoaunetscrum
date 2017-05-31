<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * CaseSettings Controller
 *
 * @property \App\Model\Table\CaseSettingsTable $CaseSettings
 *
 * @method \App\Model\Entity\CaseSetting[] paginate($object = null, array $settings = [])
 */
class CaseSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $caseSettings = $this->paginate($this->CaseSettings);

        $this->set(compact('caseSettings'));
        $this->set('_serialize', ['caseSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Setting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseSetting = $this->CaseSettings->get($id, [
            'contain' => []
        ]);

        $this->set('caseSetting', $caseSetting);
        $this->set('_serialize', ['caseSetting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseSetting = $this->CaseSettings->newEntity();
        if ($this->request->is('post')) {
            $caseSetting = $this->CaseSettings->patchEntity($caseSetting, $this->request->getData());
            if ($this->CaseSettings->save($caseSetting)) {
                $this->Flash->success(__('The case setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case setting could not be saved. Please, try again.'));
        }
        $this->set(compact('caseSetting'));
        $this->set('_serialize', ['caseSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseSetting = $this->CaseSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseSetting = $this->CaseSettings->patchEntity($caseSetting, $this->request->getData());
            if ($this->CaseSettings->save($caseSetting)) {
                $this->Flash->success(__('The case setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case setting could not be saved. Please, try again.'));
        }
        $this->set(compact('caseSetting'));
        $this->set('_serialize', ['caseSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseSetting = $this->CaseSettings->get($id);
        if ($this->CaseSettings->delete($caseSetting)) {
            $this->Flash->success(__('The case setting has been deleted.'));
        } else {
            $this->Flash->error(__('The case setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

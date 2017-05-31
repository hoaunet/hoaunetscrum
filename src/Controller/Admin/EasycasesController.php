<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Easycases Controller
 *
 * @property \App\Model\Table\EasycasesTable $Easycases
 *
 * @method \App\Model\Entity\Easycase[] paginate($object = null, array $settings = [])
 */
class EasycasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $easycases = $this->paginate($this->Easycases);

        $this->set(compact('easycases'));
        $this->set('_serialize', ['easycases']);
    }

    /**
     * View method
     *
     * @param string|null $id Easycase id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $easycase = $this->Easycases->get($id, [
            'contain' => []
        ]);

        $this->set('easycase', $easycase);
        $this->set('_serialize', ['easycase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $easycase = $this->Easycases->newEntity();
        if ($this->request->is('post')) {
            $easycase = $this->Easycases->patchEntity($easycase, $this->request->getData());
            if ($this->Easycases->save($easycase)) {
                $this->Flash->success(__('The easycase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The easycase could not be saved. Please, try again.'));
        }
        $this->set(compact('easycase'));
        $this->set('_serialize', ['easycase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Easycase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $easycase = $this->Easycases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $easycase = $this->Easycases->patchEntity($easycase, $this->request->getData());
            if ($this->Easycases->save($easycase)) {
                $this->Flash->success(__('The easycase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The easycase could not be saved. Please, try again.'));
        }
        $this->set(compact('easycase'));
        $this->set('_serialize', ['easycase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Easycase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $easycase = $this->Easycases->get($id);
        if ($this->Easycases->delete($easycase)) {
            $this->Flash->success(__('The easycase has been deleted.'));
        } else {
            $this->Flash->error(__('The easycase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

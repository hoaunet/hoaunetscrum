<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Cron Controller
 *
 * @property \App\Model\Table\CronTable $Cron
 *
 * @method \App\Model\Entity\Cron[] paginate($object = null, array $settings = [])
 */
class CronController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cron = $this->paginate($this->Cron);

        $this->set(compact('cron'));
        $this->set('_serialize', ['cron']);
    }

    /**
     * View method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cron = $this->Cron->get($id, [
            'contain' => []
        ]);

        $this->set('cron', $cron);
        $this->set('_serialize', ['cron']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cron = $this->Cron->newEntity();
        if ($this->request->is('post')) {
            $cron = $this->Cron->patchEntity($cron, $this->request->getData());
            if ($this->Cron->save($cron)) {
                $this->Flash->success(__('The cron has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cron could not be saved. Please, try again.'));
        }
        $this->set(compact('cron'));
        $this->set('_serialize', ['cron']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cron = $this->Cron->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cron = $this->Cron->patchEntity($cron, $this->request->getData());
            if ($this->Cron->save($cron)) {
                $this->Flash->success(__('The cron has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cron could not be saved. Please, try again.'));
        }
        $this->set(compact('cron'));
        $this->set('_serialize', ['cron']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cron = $this->Cron->get($id);
        if ($this->Cron->delete($cron)) {
            $this->Flash->success(__('The cron has been deleted.'));
        } else {
            $this->Flash->error(__('The cron could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locais Controller
 *
 * @property \App\Model\Table\LocaisTable $Locais
 *
 * @method \App\Model\Entity\Locai[] paginate($object = null, array $settings = [])
 */
class LocaisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $locais = $this->paginate($this->Locais);

        $this->set(compact('locais'));
        $this->set('_serialize', ['locais']);
    }

    /**
     * View method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locai = $this->Locais->get($id, [
            'contain' => []
        ]);

        $this->set('locai', $locai);
        $this->set('_serialize', ['locai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locai = $this->Locais->newEntity();
        if ($this->request->is('post')) {
            $locai = $this->Locais->patchEntity($locai, $this->request->getData());
            if ($this->Locais->save($locai)) {
                $this->Flash->success(__('The locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locai could not be saved. Please, try again.'));
        }
        $this->set(compact('locai'));
        $this->set('_serialize', ['locai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locai = $this->Locais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locai = $this->Locais->patchEntity($locai, $this->request->getData());
            if ($this->Locais->save($locai)) {
                $this->Flash->success(__('The locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locai could not be saved. Please, try again.'));
        }
        $this->set(compact('locai'));
        $this->set('_serialize', ['locai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locai = $this->Locais->get($id);
        if ($this->Locais->delete($locai)) {
            $this->Flash->success(__('The locai has been deleted.'));
        } else {
            $this->Flash->error(__('The locai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

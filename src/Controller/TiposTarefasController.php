<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposTarefas Controller
 *
 * @property \App\Model\Table\TiposTarefasTable $TiposTarefas
 *
 * @method \App\Model\Entity\TiposTarefa[] paginate($object = null, array $settings = [])
 */
class TiposTarefasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tiposTarefas = $this->paginate($this->TiposTarefas);

        $this->set(compact('tiposTarefas'));
        $this->set('_serialize', ['tiposTarefas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposTarefa = $this->TiposTarefas->get($id, [
            'contain' => []
        ]);

        $this->set('tiposTarefa', $tiposTarefa);
        $this->set('_serialize', ['tiposTarefa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposTarefa = $this->TiposTarefas->newEntity();
        if ($this->request->is('post')) {
            $tiposTarefa = $this->TiposTarefas->patchEntity($tiposTarefa, $this->request->getData());
            if ($this->TiposTarefas->save($tiposTarefa)) {
                $this->Flash->success(__('The tipos tarefa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos tarefa could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposTarefa'));
        $this->set('_serialize', ['tiposTarefa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposTarefa = $this->TiposTarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposTarefa = $this->TiposTarefas->patchEntity($tiposTarefa, $this->request->getData());
            if ($this->TiposTarefas->save($tiposTarefa)) {
                $this->Flash->success(__('The tipos tarefa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos tarefa could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposTarefa'));
        $this->set('_serialize', ['tiposTarefa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposTarefa = $this->TiposTarefas->get($id);
        if ($this->TiposTarefas->delete($tiposTarefa)) {
            $this->Flash->success(__('The tipos tarefa has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos tarefa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

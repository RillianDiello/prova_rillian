<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

/**
 * Tarefas Controller
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 *
 * @method \App\Model\Entity\Tarefa[] paginate($object = null, array $settings = [])
 */
class TarefasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Locais', 'TiposTarefas']
        ];
        $tarefas = $this->paginate($this->Tarefas);

        $this->set(compact('tarefas'));
        $this->set('_serialize', ['tarefas']);
        $date = new FrozenDate();
        $date->setToStringFormat('dd/MM/yyyy - hh:mm');
        $datetime = new FrozenTime();
        $datetime->setToStringFormat('dd/MM/yyyy - hh:mm');
    }

    /**
     * View method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => ['Users', 'Locais', 'TiposTarefas']
        ]);

        $this->set('tarefa', $tarefa);
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('The tarefa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
        }
        $users = $this->Tarefas->Users->find('list', ['limit' => 200]);
        $locais = $this->Tarefas->Locais->find('list', ['limit' => 200]);
        $tiposTarefas = $this->Tarefas->TiposTarefas->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'users', 'locais', 'tiposTarefas'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('The tarefa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
        }
        $users = $this->Tarefas->Users->find('list', ['limit' => 200]);
        $locais = $this->Tarefas->Locais->find('list', ['limit' => 200]);
        $tiposTarefas = $this->Tarefas->TiposTarefas->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'users', 'locais', 'tiposTarefas'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $this->Flash->success(__('The tarefa has been deleted.'));
        } else {
            $this->Flash->error(__('The tarefa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

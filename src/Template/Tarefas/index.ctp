<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Locais'), ['controller' => 'Locais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Tipos de Tarefas'), ['controller' => 'TiposTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novos Locais'), ['controller' => 'Locais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novos Tipos de Tarefa'), ['controller' => 'TiposTarefas', 'action' => 'add']) ?></li>

    </ul>
</nav>
<div class="row">
 <h3><?= __('Tarefas') ?></h3>
<table class="table table-striped table-hover ">
  <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_tarefa_id') ?></th>                
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
            <tr>
                <td><?= $this->Number->format($tarefa->id) ?></td>
                <td><?= h($tarefa->titulo) ?></td>
                <td><?= h($tarefa->dia) ?></td>
                <td><?= h($tarefa->inicio) ?></td>
                <td><?= h($tarefa->fim) ?></td>
                <td><?= $tarefa->has('user') ? $this->Html->link($tarefa->user->nome, ['controller' => 'Users', 'action' => 'view', $tarefa->user->id]) : '' ?></td>
                <td><?= $tarefa->has('locai') ? $this->Html->link($tarefa->locai->nome, ['controller' => 'Locais', 'action' => 'view', $tarefa->locai->id]) : '' ?></td>
                <td><?= $tarefa->has('tipos_tarefa') ? $this->Html->link($tarefa->tipos_tarefa->nome, ['controller' => 'TiposTarefas', 'action' => 'view', $tarefa->tipos_tarefa->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tarefa->id],['class' => 'btn btn-info']) ?>                  
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tarefa->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tarefa->id], ['class' => 'btn btn-danger'], ['confirm' => __('Deseja realmente excluir a tarefa # {0}?', $tarefa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table> 


    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Papeis'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Papel'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
 <h3><?= __('Usuarios') ?></h3>
<table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->nome) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= $user->has('role') ? $this->Html->link($user->role->nome, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info']) ?>

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class' => 'btn btn-warning'])?>
                    
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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

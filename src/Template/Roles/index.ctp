<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Novos Papeis'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="row">
 <h3><?= __('Tipos de Usuarios') ?></h3>
<table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->nome) ?></td>
                <td><?= h($role->created) ?></td>
                <td><?= h($role->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $role->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
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

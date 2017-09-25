<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTarefa[]|\Cake\Collection\CollectionInterface $tiposTarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Novos Tipos Tarefa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
 <h3><?= __('Tipos de Tarefas') ?></h3>
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
            <?php foreach ($tiposTarefas as $tiposTarefa): ?>
            <tr>
                <td><?= $this->Number->format($tiposTarefa->id) ?></td>
                <td><?= h($tiposTarefa->nome) ?></td>
                <td><?= h($tiposTarefa->created) ?></td>
                <td><?= h($tiposTarefa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposTarefa->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposTarefa->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposTarefa->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposTarefa->id)]) ?>
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

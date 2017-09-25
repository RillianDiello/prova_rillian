<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locai[]|\Cake\Collection\CollectionInterface $locais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Novo Local'), ['action' => 'add']) ?></li>
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
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locais as $locai): ?>
            <tr>
                <td><?= $this->Number->format($locai->id) ?></td>
                <td><?= h($locai->nome) ?></td>
                <td><?= h($locai->created) ?></td>
                <td><?= h($locai->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $locai->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $locai->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $locai->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id)]) ?>
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

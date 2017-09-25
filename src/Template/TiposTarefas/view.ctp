<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTarefa $tiposTarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Tarefa'), ['action' => 'edit', $tiposTarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Tarefa'), ['action' => 'delete', $tiposTarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposTarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Tarefa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposTarefas view large-9 medium-8 columns content">
    <h3><?= h($tiposTarefa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tiposTarefa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposTarefa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tiposTarefa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tiposTarefa->modified) ?></td>
        </tr>
    </table>
</div>
<?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>
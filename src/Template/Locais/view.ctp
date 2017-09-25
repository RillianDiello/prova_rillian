<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locai $locai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Locai'), ['action' => 'edit', $locai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Locai'), ['action' => 'delete', $locai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Locai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locais view large-9 medium-8 columns content">
    <h3><?= h($locai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($locai->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($locai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($locai->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($locai->modified) ?></td>
        </tr>
    </table>
</div>
<?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>
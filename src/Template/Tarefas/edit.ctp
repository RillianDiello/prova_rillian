<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Locais'), ['controller' => 'Locais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novos Locais'), ['controller' => 'Locais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Tipos de Tarefas'), ['controller' => 'TiposTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novos Tipos de Tarefa'), ['controller' => 'TiposTarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Edit Tarefa') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('dia');
            echo $this->Form->control('descricao');
            echo $this->Form->control('inicio', ['empty' => true]);
            echo $this->Form->control('fim', ['empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('local_id', ['options' => $locais]);
            echo $this->Form->control('tipo_tarefa_id', ['options' => $tiposTarefas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

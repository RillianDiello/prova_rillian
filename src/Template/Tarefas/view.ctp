<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Tarefa'), ['action' => 'edit', $tarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Deseja realmente excluir a tarefa # {0}?', $tarefa->id)]) ?> </li>
         <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Locais'), ['controller' => 'Locais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novos Locais'), ['controller' => 'Locais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Tipos de Tarefas'), ['controller' => 'TiposTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novos Tipos de Tarefa'), ['controller' => 'TiposTarefas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Tarefa'), ['controller' => 'TiposTarefas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tarefas view large-9 medium-8 columns content">
    <h3><?= h($tarefa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($tarefa->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tarefa->has('user') ? $this->Html->link($tarefa->user->nome, ['controller' => 'Users', 'action' => 'view', $tarefa->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locai') ?></th>
            <td><?= $tarefa->has('locai') ? $this->Html->link($tarefa->locai->nome, ['controller' => 'Locais', 'action' => 'view', $tarefa->locai->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipos Tarefa') ?></th>
            <td><?= $tarefa->has('tipos_tarefa') ? $this->Html->link($tarefa->tipos_tarefa->nome, ['controller' => 'TiposTarefas', 'action' => 'view', $tarefa->tipos_tarefa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tarefa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia') ?></th>
            <td><?= h($tarefa->dia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($tarefa->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim') ?></th>
            <td><?= h($tarefa->fim) ?></td>
        </tr>
        
        
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($tarefa->descricao)); ?>
    </div>
</div>
<?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>
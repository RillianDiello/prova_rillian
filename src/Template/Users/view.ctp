<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>        
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Papeis'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Papel'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->nome, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>

        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tarefas') ?></h4>
        <?php if (!empty($user->tarefas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Dia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Inicio') ?></th>
                <th scope="col"><?= __('Fim') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Local Id') ?></th>
                <th scope="col"><?= __('Tipo Tarefa Id') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tarefas as $tarefas): ?>
            <tr>
                <td><?= h($tarefas->id) ?></td>
                <td><?= h($tarefas->titulo) ?></td>
                <td><?= h($tarefas->dia) ?></td>
                <td><?= h($tarefas->descricao) ?></td>
                <td><?= h($tarefas->inicio) ?></td>
                <td><?= h($tarefas->fim) ?></td>
                <td><?= h($tarefas->user_id) ?></td>
                <td><?= h($tarefas->local_id) ?></td>
                <td><?= h($tarefas->tipo_tarefa_id) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tarefas', 'action' => 'view', $tarefas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tarefas', 'action' => 'edit', $tarefas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tarefas', 'action' => 'delete', $tarefas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
<?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>

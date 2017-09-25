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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Papeis'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
         <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('nome', ['class' =>'form-control', 'Placeholder' => 'Nome']);?>
            </div>
        </div>
        <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('email', ['class' =>'form-control', 'Placeholder' => 'Email']);?>
            </div>
        </div>
        <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('password', ['class' =>'form-control', 'Placeholder' => 'Password']);?>
            </div>
        </div>
        <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('confirm_password',['type' =>'password','class' =>'form-control', 'Placeholder' => 'confirm_password']);?>
            </div>
        </div>
        <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('role_id', ['options' => $roles,'class' =>'form-control', 'Placeholder' => 'Papel']);?>
            </div>
        </div>




    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-sucess']) ;?>
        <?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>
      </div>
    </div>
    </fieldset>
    
    <?= $this->Form->end() ?>
</div>

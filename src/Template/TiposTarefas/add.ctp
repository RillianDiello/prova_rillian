<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Tarefas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposTarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposTarefa) ?>
    <fieldset>
        <legend><?= __('Add Tipos Tarefa') ?></legend>
        <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('nome', ['class' =>'form-control', 'Placeholder' => 'Nome']);?>
            </div>
        </div>
       <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-sucess']) ;?>
        <?= $this->html->link('Voltar', ['action' => 'index'],['class' => 'btn btn-primary']); ?>
      </div>
    </fieldset>
    <
    <?= $this->Form->end() ?>
</div>

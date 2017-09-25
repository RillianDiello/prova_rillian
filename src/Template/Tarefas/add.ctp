<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Locais'), ['controller' => 'Locais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Local'), ['controller' => 'Locais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tipos Tarefas'), ['controller' => 'TiposTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Tipo Tarefa'), ['controller' => 'TiposTarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Add Tarefa') ?></legend>
        <?php $this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}']);?>

    <div class="form-group">

        <div class="col-lg-10">
        <?php echo $this->Form->control('titulo', ['class' =>'form-control', 'Placeholder' => 'Titulo']);?>
        </div>
    </div>
        
        <div class="form-group">

        <div class="col-lg-10">
        <?php echo $this->Form->control('descricao', ['class' =>'form-control', 'Placeholder' => 'Descricao']);?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10">
        <?php echo $this->Form->control('inicio', ['empty' => true,'class' =>'form-control', 'Placeholder' => 'Inicio']);?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10">
        <?php echo $this->Form->control('fim', ['empty' => true,'class' =>'form-control', 'Placeholder' => 'Fim']);?>
        </div>
    </div>
       

        <div class="form-group">
        <div class="col-lg-10">
        <?php echo $this->Form->control('user_id', ['options' => $users,'class' =>'form-control', 'Placeholder' => 'Usuario']);?>
        </div>
    </div>
       

        <div class="form-group">
        <div class="col-lg-10">
        <?php echo $this->Form->control('local_id', ['options' => $locais,'class' =>'form-control', 'Placeholder' => 'Local']);?>
        </div>
    </div>
            

             <div class="form-group">

            <div class="col-lg-10">
            <?php echo $this->Form->control('tipo_tarefa_id', ['options' => $tiposTarefas,'class' =>'form-control', 'Placeholder' => 'Tipo de Tarefa']);?>
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

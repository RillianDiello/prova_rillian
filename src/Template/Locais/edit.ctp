<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $locai->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Locais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locais form large-9 medium-8 columns content">
    <?= $this->Form->create($locai) ?>
    <fieldset>
        <legend><?= __('Edit Local') ?></legend>
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
   
    <?= $this->Form->end() ?>
</div>

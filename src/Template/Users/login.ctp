<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
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
            <div class="col-lg-10 col-lg-offset-2">
            <?= $this->Form->button(__('Login'),['class' => 'btn btn-sucess']) ;?>
            </div>
        </div>
        </fieldset>
    
    <?= $this->Form->end() ?>
</div>

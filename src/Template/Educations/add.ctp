<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="educations form large-9 medium-8 columns content">
    <?= $this->Form->create($education) ?>
    <fieldset>
        <legend><?= __('Add Education') ?></legend>
        <?php
            echo $this->Form->input('education');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

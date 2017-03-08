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
<div class="heights form large-9 medium-8 columns content">
    <?= $this->Form->create($height) ?>
    <fieldset>
        <legend><?= __('Add Height') ?></legend>
        <?php
            echo $this->Form->input('height');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

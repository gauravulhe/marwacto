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
<div class="mamaGotras form large-9 medium-8 columns content">
    <?= $this->Form->create($mamaGotra) ?>
    <fieldset>
        <legend><?= __('Add Mama Gotra') ?></legend>
        <?php
            echo $this->Form->input('community_id', ['options' => $communities]);
            echo $this->Form->input('gotra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

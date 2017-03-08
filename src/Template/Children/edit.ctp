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
                ['action' => 'delete', $child->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $child->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Children'), ['action' => 'index']) ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="children form large-9 medium-8 columns content">
    <?= $this->Form->create($child) ?>
    <fieldset>
        <legend><?= __('Edit Child') ?></legend>
        <?php
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

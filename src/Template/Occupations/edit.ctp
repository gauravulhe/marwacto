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
                ['action' => 'delete', $occupation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Occupations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="occupations form large-9 medium-8 columns content">
    <?= $this->Form->create($occupation) ?>
    <fieldset>
        <legend><?= __('Edit Occupation') ?></legend>
        <?php
            echo $this->Form->input('occupation');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

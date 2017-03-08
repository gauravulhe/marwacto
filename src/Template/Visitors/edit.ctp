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
                ['action' => 'delete', $visitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visitor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Visitors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="visitors form large-9 medium-8 columns content">
    <?= $this->Form->create($visitor) ?>
    <fieldset>
        <legend><?= __('Edit Visitor') ?></legend>
        <?php
            echo $this->Form->input('ip_address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

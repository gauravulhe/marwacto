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
                ['action' => 'delete', $community->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $community->id)]
            )
        ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="communities form large-9 medium-8 columns content">
    <?= $this->Form->create($community) ?>
    <fieldset>
        <legend><?= __('Edit Community') ?></legend>
        <?php
            echo $this->Form->input('community');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

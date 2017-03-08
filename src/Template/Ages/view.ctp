<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Age'), ['action' => 'edit', $age->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Age'), ['action' => 'delete', $age->id], ['confirm' => __('Are you sure you want to delete # {0}?', $age->id)]) ?> </li>
        <li><?= $this->Html->link(__('New Age'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ages'), ['action' => 'index']) ?> </li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="ages view large-9 medium-8 columns content">
    <h3><?= h($age->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($age->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($age->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($age->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($age->modified) ?></td>
        </tr>
    </table>
</div>

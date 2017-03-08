<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Interest'), ['action' => 'edit', $interest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Interest'), ['action' => 'delete', $interest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Interests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interest'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="interests view large-9 medium-8 columns content">
    <h3><?= h($interest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $interest->has('user') ? $this->Html->link($interest->user->first_name, ['controller' => 'Users', 'action' => 'view', $interest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($interest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Int Id') ?></th>
            <td><?= $this->Number->format($interest->int_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($interest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($interest->modified) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visitor'), ['action' => 'edit', $visitor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visitor'), ['action' => 'delete', $visitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visitors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visitor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visitors view large-9 medium-8 columns content">
    <h3><?= h($visitor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($visitor->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visitor->id) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Like'), ['action' => 'edit', $like->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Like'), ['action' => 'delete', $like->id], ['confirm' => __('Are you sure you want to delete # {0}?', $like->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Like'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likes view large-9 medium-8 columns content">
    <h3><?= h($like->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $like->has('user') ? $this->Html->link($like->user->first_name, ['controller' => 'Users', 'action' => 'view', $like->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($like->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Like Id') ?></th>
            <td><?= $this->Number->format($like->like_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($like->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($like->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Likes') ?></h4>
        <?php if (!empty($like->likes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Like Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($like->likes as $likes): ?>
            <tr>
                <td><?= h($likes->id) ?></td>
                <td><?= h($likes->user_id) ?></td>
                <td><?= h($likes->like_id) ?></td>
                <td><?= h($likes->created) ?></td>
                <td><?= h($likes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Likes', 'action' => 'view', $likes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Likes', 'action' => 'edit', $likes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Likes', 'action' => 'delete', $likes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

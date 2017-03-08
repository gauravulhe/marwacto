<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Community'), ['action' => 'add']) ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="communities index large-9 medium-8 columns content">
    <h3><?= __('Communities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('community') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($communities as $community): ?>
            <tr>
                <td><?= $this->Number->format($community->id) ?></td>
                <td><?= h($community->community) ?></td>
                <td><?= h($community->created) ?></td>
                <td><?= h($community->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $community->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $community->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $community->id], ['confirm' => __('Are you sure you want to delete # {0}?', $community->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

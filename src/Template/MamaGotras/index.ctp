<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mama Gotra'), ['action' => 'add']) ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="mamaGotras index large-9 medium-8 columns content">
    <h3><?= __('Mama Gotras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('community_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gotra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mamaGotras as $mamaGotra): ?>
            <tr>
                <td><?= $this->Number->format($mamaGotra->id) ?></td>
                <td><?= $mamaGotra->has('community') ? $this->Html->link($mamaGotra->community->id, ['controller' => 'Communities', 'action' => 'view', $mamaGotra->community->id]) : '' ?></td>
                <td><?= h($mamaGotra->gotra) ?></td>
                <td><?= h($mamaGotra->created) ?></td>
                <td><?= h($mamaGotra->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mamaGotra->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mamaGotra->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mamaGotra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mamaGotra->id)]) ?>
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

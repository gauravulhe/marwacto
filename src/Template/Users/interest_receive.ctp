<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="users index large-10 medium-8 columns content">
    <h3><?= __('Favourite Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marital_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('community_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gotra_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('education') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correspondence_city', 'City') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($users)): 
                foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->created_by) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->age) ?></td>
                <td><?= h($user->height->height) ?></td>
                <td><?= h($user->marital_status) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->community_name) ?></td>
                <td><?= h($user->gotra_name) ?></td>
                <td><?= h($user->education_name) ?></td>
                <td><?= h($user->profession_name) ?></td>
                <td><?= h($user->occupation_name) ?></td>
                <td><?= h($user->ccity_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                </td>
            </tr>
            <?php endforeach; else:?>
            <tr>
                <td colspan="13" style="text-align:center;"><?= "No records found." ?></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <?php if(!empty($users)): ?>
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
    <?php endif; ?>
</div>

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
    <h3><?= __('Users Search') ?></h3>
    <?php echo $this->Form->create() ?>
        <?php 
            echo $this->Form->input('name', ['label' => false, 'placeholder' => 'Search By Name']);
            echo $this->Form->input('age', ['label' => false, 'placeholder' => 'Search By Age']);
            echo $this->Form->input('height', ['label' => false, 'placeholder' => 'Search By Height']);
            $options = [
                'Male' => 'Male',
                'Female' => 'Female'
            ];
            echo $this->Form->input('gender', ['options' => $options],['label' => false, 'placeholder' => 'Search By Gender']);
            echo $this->Form->input('occupation', ['label' => false, 'placeholder' => 'Search By Occupation']);
        ?>
        <?php echo $this->Form->button(__('Search')) ?>
    <?php echo $this->Form->end() ?>
</div>
<div class="users index large-10 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <?php 
        // Add at the end of the trail
        $this->Breadcrumbs->add(
            'Products',
            ['controller' => 'products', 'action' => 'index']
        ); 
    ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name', 'Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correspondence_city', 'City') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->age) ?></td>
                <td><?= h($user->height->height) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->occupation_name) ?></td>
                <td><?= h($user->ccity_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
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

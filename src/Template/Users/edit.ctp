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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Heights'), ['controller' => 'Heights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Height'), ['controller' => 'Heights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weights'), ['controller' => 'Weights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weight'), ['controller' => 'Weights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mama Gotras'), ['controller' => 'MamaGotras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mama Gotra'), ['controller' => 'MamaGotras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Communities'), ['controller' => 'Communities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Community'), ['controller' => 'Communities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gotras'), ['controller' => 'Gotras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gotra'), ['controller' => 'Gotras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Occupations'), ['controller' => 'Occupations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Occupation'), ['controller' => 'Occupations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            $options = [
                'Self' => 'Self',
                'Parents' => 'Parents',
                'Friends' => 'Friends',
                'Others' => 'Others',
            ];
            echo $this->Form->input('created_by', ['options' => $options]);
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('mama_last_name');
            echo $this->Form->input('mobile_number');
            echo $this->Form->input('middle_name');
            echo $this->Form->input('mother_name');
            echo $this->Form->input('date_of_birth');
            echo $this->Form->input('time_of_birth');
            echo $this->Form->input('rashi');
            echo $this->Form->input('age', ['options' => $age]);
            echo $this->Form->input('child_id', ['options' => $children]);
            echo $this->Form->input('no_of_children');
            echo $this->Form->input('place_of_birth');
            echo $this->Form->input('hobbies');
            echo $this->Form->input('mother_tongue');
            echo $this->Form->input('height_id', ['options' => $heights]);
            echo $this->Form->input('weight_id', ['options' => $weights]);
            echo $this->Form->input('blood_group');
            echo $this->Form->input('marital_status');
            echo $this->Form->input('gender');
            echo $this->Form->input('manglik');
            echo $this->Form->input('community_id');
            echo $this->Form->input('gotra_id');
            echo $this->Form->input('mama_gotra_id', ['options' => $mamaGotras]);
            echo $this->Form->input('education_id');
            echo $this->Form->input('education_details');
            echo $this->Form->input('profession_id');
            echo $this->Form->input('profession_details');
            echo $this->Form->input('income_id', ['options' => $incomes]);
            echo $this->Form->input('occupation_id');
            echo $this->Form->input('company');
            echo $this->Form->input('designation');
            echo $this->Form->input('occupation_place');
            echo $this->Form->input('occupation_city', ['options' => $cities]);
            echo $this->Form->input('occupation_state', ['options' => $states]);
            echo $this->Form->input('occupation_country', ['options' => $countries]);
            echo $this->Form->input('correspondence_address');
            echo $this->Form->input('correspondence_city', ['options' => $cities]);
            echo $this->Form->input('correspondence_state', ['options' => $states]);
            echo $this->Form->input('correspondence_country', ['options' => $countries]);
            echo $this->Form->input('correspondence_postal_code');
            echo $this->Form->input('permanent_address');
            echo $this->Form->input('permanent_city', ['options' => $cities]);
            echo $this->Form->input('permanent_state', ['options' => $states]);
            echo $this->Form->input('permanent_country', ['options' => $countries]);
            echo $this->Form->input('permanent_postal_code');
            echo $this->Form->input('partner_min_age', ['options' => $age]);
            echo $this->Form->input('partner_max_age', ['options' => $age]);
            echo $this->Form->input('partner_min_height', ['options' => $heights]);
            echo $this->Form->input('partner_max_height', ['options' => $heights]);
            echo $this->Form->input('family_details');
            echo $this->Form->input('agree');            
            echo $this->Form->input('communities._ids', ['options' => $communities]);
            echo $this->Form->input('educations._ids', ['options' => $educations]);
            echo $this->Form->input('occupations._ids', ['options' => $occupations]);
            echo $this->Form->input('professions._ids', ['options' => $professions]);
            echo $this->Form->input('cities._ids', ['options' => $cities]);
            echo $this->Form->input('states._ids', ['options' => $states]);
            echo $this->Form->input('countries._ids', ['options' => $countries]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profession'), ['action' => 'edit', $profession->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profession'), ['action' => 'delete', $profession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profession->id)]) ?> </li>
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="professions view large-9 medium-8 columns content">
    <h3><?= h($profession->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profession') ?></th>
            <td><?= h($profession->profession) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profession->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($profession->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($profession->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($profession->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Mama Last Name') ?></th>
                <th scope="col"><?= __('Mobile Number') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Mother Name') ?></th>
                <th scope="col"><?= __('Date Of Birth') ?></th>
                <th scope="col"><?= __('Time Of Birth') ?></th>
                <th scope="col"><?= __('Rashi') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Child Id') ?></th>
                <th scope="col"><?= __('No Of Children') ?></th>
                <th scope="col"><?= __('Place Of Birth') ?></th>
                <th scope="col"><?= __('Hobbies') ?></th>
                <th scope="col"><?= __('Mother Tongue') ?></th>
                <th scope="col"><?= __('Height Id') ?></th>
                <th scope="col"><?= __('Weight Id') ?></th>
                <th scope="col"><?= __('Blood Group') ?></th>
                <th scope="col"><?= __('Marital Status') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Manglik') ?></th>
                <th scope="col"><?= __('Community') ?></th>
                <th scope="col"><?= __('Gotra') ?></th>
                <th scope="col"><?= __('Mama Gotra Id') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Education Details') ?></th>
                <th scope="col"><?= __('Profession') ?></th>
                <th scope="col"><?= __('Profession Details') ?></th>
                <th scope="col"><?= __('Income Id') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Company') ?></th>
                <th scope="col"><?= __('Designation') ?></th>
                <th scope="col"><?= __('Occupation Place') ?></th>
                <th scope="col"><?= __('Occupation Country') ?></th>
                <th scope="col"><?= __('Occupation State') ?></th>
                <th scope="col"><?= __('Occupation City') ?></th>
                <th scope="col"><?= __('Correspondence Address') ?></th>
                <th scope="col"><?= __('Correspondence City') ?></th>
                <th scope="col"><?= __('Correspondence State') ?></th>
                <th scope="col"><?= __('Correspondence Postal Code') ?></th>
                <th scope="col"><?= __('Correspondence Country') ?></th>
                <th scope="col"><?= __('Permanent Address') ?></th>
                <th scope="col"><?= __('Permanent City') ?></th>
                <th scope="col"><?= __('Permanent State') ?></th>
                <th scope="col"><?= __('Permanent Postal Code') ?></th>
                <th scope="col"><?= __('Permanent Country') ?></th>
                <th scope="col"><?= __('Partner Min Age') ?></th>
                <th scope="col"><?= __('Partner Max Age') ?></th>
                <th scope="col"><?= __('Partner Min Height') ?></th>
                <th scope="col"><?= __('Partner Max Height') ?></th>
                <th scope="col"><?= __('Partner Education') ?></th>
                <th scope="col"><?= __('Partner Profession') ?></th>
                <th scope="col"><?= __('Partner Occupations') ?></th>
                <th scope="col"><?= __('Partner Gender') ?></th>
                <th scope="col"><?= __('Partner Community') ?></th>
                <th scope="col"><?= __('Partner Country') ?></th>
                <th scope="col"><?= __('Partner State') ?></th>
                <th scope="col"><?= __('Partner City') ?></th>
                <th scope="col"><?= __('Photo1') ?></th>
                <th scope="col"><?= __('Photo1 Dir') ?></th>
                <th scope="col"><?= __('Photo2') ?></th>
                <th scope="col"><?= __('Photo2 Dir') ?></th>
                <th scope="col"><?= __('Photo3') ?></th>
                <th scope="col"><?= __('Photo4') ?></th>
                <th scope="col"><?= __('Family Details') ?></th>
                <th scope="col"><?= __('Agree') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Profile Status') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Payment Date') ?></th>
                <th scope="col"><?= __('Expiry Date') ?></th>
                <th scope="col"><?= __('User Type') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profession->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->uuid) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->mama_last_name) ?></td>
                <td><?= h($users->mobile_number) ?></td>
                <td><?= h($users->middle_name) ?></td>
                <td><?= h($users->mother_name) ?></td>
                <td><?= h($users->date_of_birth) ?></td>
                <td><?= h($users->time_of_birth) ?></td>
                <td><?= h($users->rashi) ?></td>
                <td><?= h($users->age) ?></td>
                <td><?= h($users->child_id) ?></td>
                <td><?= h($users->no_of_children) ?></td>
                <td><?= h($users->place_of_birth) ?></td>
                <td><?= h($users->hobbies) ?></td>
                <td><?= h($users->mother_tongue) ?></td>
                <td><?= h($users->height_id) ?></td>
                <td><?= h($users->weight_id) ?></td>
                <td><?= h($users->blood_group) ?></td>
                <td><?= h($users->marital_status) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->manglik) ?></td>
                <td><?= h($users->community) ?></td>
                <td><?= h($users->gotra) ?></td>
                <td><?= h($users->mama_gotra_id) ?></td>
                <td><?= h($users->education) ?></td>
                <td><?= h($users->education_details) ?></td>
                <td><?= h($users->profession) ?></td>
                <td><?= h($users->profession_details) ?></td>
                <td><?= h($users->income_id) ?></td>
                <td><?= h($users->occupation) ?></td>
                <td><?= h($users->company) ?></td>
                <td><?= h($users->designation) ?></td>
                <td><?= h($users->occupation_place) ?></td>
                <td><?= h($users->occupation_country) ?></td>
                <td><?= h($users->occupation_state) ?></td>
                <td><?= h($users->occupation_city) ?></td>
                <td><?= h($users->correspondence_address) ?></td>
                <td><?= h($users->correspondence_city) ?></td>
                <td><?= h($users->correspondence_state) ?></td>
                <td><?= h($users->correspondence_postal_code) ?></td>
                <td><?= h($users->correspondence_country) ?></td>
                <td><?= h($users->permanent_address) ?></td>
                <td><?= h($users->permanent_city) ?></td>
                <td><?= h($users->permanent_state) ?></td>
                <td><?= h($users->permanent_postal_code) ?></td>
                <td><?= h($users->permanent_country) ?></td>
                <td><?= h($users->partner_min_age) ?></td>
                <td><?= h($users->partner_max_age) ?></td>
                <td><?= h($users->partner_min_height) ?></td>
                <td><?= h($users->partner_max_height) ?></td>
                <td><?= h($users->partner_education) ?></td>
                <td><?= h($users->partner_profession) ?></td>
                <td><?= h($users->partner_occupations) ?></td>
                <td><?= h($users->partner_gender) ?></td>
                <td><?= h($users->partner_community) ?></td>
                <td><?= h($users->partner_country) ?></td>
                <td><?= h($users->partner_state) ?></td>
                <td><?= h($users->partner_city) ?></td>
                <td><?= h($users->photo1) ?></td>
                <td><?= h($users->photo1_dir) ?></td>
                <td><?= h($users->photo2) ?></td>
                <td><?= h($users->photo2_dir) ?></td>
                <td><?= h($users->photo3) ?></td>
                <td><?= h($users->photo4) ?></td>
                <td><?= h($users->family_details) ?></td>
                <td><?= h($users->agree) ?></td>
                <td><?= h($users->created_by) ?></td>
                <td><?= h($users->profile_status) ?></td>
                <td><?= h($users->payment_status) ?></td>
                <td><?= h($users->payment_date) ?></td>
                <td><?= h($users->expiry_date) ?></td>
                <td><?= h($users->user_type) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

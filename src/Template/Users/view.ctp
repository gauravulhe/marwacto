<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <!-- <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li> -->
        <?php echo $this->element('nav_aside'); ?> 
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mama Last Name') ?></th>
            <td><?= h($user->mama_last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Number') ?></th>
            <td><?= h($user->mobile_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($user->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mother Name') ?></th>
            <td><?= h($user->mother_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($user->date_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Of Birth') ?></th>
            <td><?= h($user->time_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rashi') ?></th>
            <td><?= h($user->rashi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= h($user->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Child') ?></th>
            <td><?= h($user->child->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Of Children') ?></th>
            <td><?= h($user->no_of_children) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place Of Birth') ?></th>
            <td><?= h($user->place_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hobbies') ?></th>
            <td><?= h($user->hobbies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mother Tongue') ?></th>
            <td><?= h($user->mother_tongue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= h($user->height->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= h($user->weight->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blood Group') ?></th>
            <td><?= h($user->blood_group) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marital Status') ?></th>
            <td><?= h($user->marital_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manglik') ?></th>
            <td><?= h($user->manglik) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Community') ?></th>
            <td><?= h($user->community_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gotra') ?></th>
            <td><?= h($user->gotra_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mama Gotra') ?></th>
            <td><?= h($user->mama_gotra->gotra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= h($user->education_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education Details') ?></th>
            <td><?= h($user->education_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession') ?></th>
            <td><?= h($user->profession_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession Details') ?></th>
            <td><?= h($user->profession_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Income') ?></th>
            <td><?= h($user->income->income) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($user->occupation_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= h($user->company) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Designation') ?></th>
            <td><?= h($user->designation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation Place') ?></th>
            <td><?= h($user->occupation_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation Country') ?></th>
            <td><?= h($user->occupation_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation State') ?></th>
            <td><?= h($user->occupation_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation City') ?></th>
            <td><?= h($user->occupation_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correspondence City') ?></th>
            <td><?= h($user->ccity_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correspondence State') ?></th>
            <td><?= h($user->correspondence_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correspondence Postal Code') ?></th>
            <td><?= h($user->correspondence_postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correspondence Country') ?></th>
            <td><?= h($user->correspondence_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permanent City') ?></th>
            <td><?= h($user->pcity_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permanent State') ?></th>
            <td><?= h($user->permanent_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permanent Postal Code') ?></th>
            <td><?= h($user->permanent_postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permanent Country') ?></th>
            <td><?= h($user->permanent_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partner Min Age') ?></th>
            <td><?= h($user->partner_min_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partner Max Age') ?></th>
            <td><?= h($user->partner_max_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partner Min Height') ?></th>
            <td><?= h($user->partner_min_height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partner Max Height') ?></th>
            <td><?= h($user->partner_max_height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo1') ?></th>
            <td><?= h($user->photo1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo1 Dir') ?></th>
            <td><?= h($user->photo1_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Details') ?></th>
            <td><?= h($user->family_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Correspondence Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->correspondence_address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Permanent Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->permanent_address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Communities') ?></h4>
        <?php if (!empty($user->communities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Community') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->communities as $communities): ?>
            <tr>
                <td><?= h($communities->id) ?></td>
                <td><?= h($communities->community) ?></td>
                <td><?= h($communities->created) ?></td>
                <td><?= h($communities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Communities', 'action' => 'view', $communities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Communities', 'action' => 'edit', $communities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Communities', 'action' => 'delete', $communities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $communities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Educations') ?></h4>
        <?php if (!empty($user->educations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->educations as $educations): ?>
            <tr>
                <td><?= h($educations->id) ?></td>
                <td><?= h($educations->education) ?></td>
                <td><?= h($educations->created) ?></td>
                <td><?= h($educations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Educations', 'action' => 'view', $educations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Educations', 'action' => 'edit', $educations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educations', 'action' => 'delete', $educations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Occupations') ?></h4>
        <?php if (!empty($user->occupations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->occupations as $occupations): ?>
            <tr>
                <td><?= h($occupations->id) ?></td>
                <td><?= h($occupations->occupation) ?></td>
                <td><?= h($occupations->created) ?></td>
                <td><?= h($occupations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Occupations', 'action' => 'view', $occupations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Occupations', 'action' => 'edit', $occupations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Occupations', 'action' => 'delete', $occupations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occupations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Professions') ?></h4>
        <?php if (!empty($user->professions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profession') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->professions as $professions): ?>
            <tr>
                <td><?= h($professions->id) ?></td>
                <td><?= h($professions->profession) ?></td>
                <td><?= h($professions->created) ?></td>
                <td><?= h($professions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Professions', 'action' => 'view', $professions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Professions', 'action' => 'edit', $professions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Professions', 'action' => 'delete', $professions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($user->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->city) ?></td>
                <td><?= h($cities->state_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related States') ?></h4>
        <?php if (!empty($user->states)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->states as $states): ?>
            <tr>
                <td><?= h($states->id) ?></td>
                <td><?= h($states->state) ?></td>
                <td><?= h($states->country_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'States', 'action' => 'view', $states->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'States', 'action' => 'edit', $states->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'States', 'action' => 'delete', $states->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Countries') ?></h4>
        <?php if (!empty($user->countries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sortname') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->countries as $countries): ?>
            <tr>
                <td><?= h($countries->id) ?></td>
                <td><?= h($countries->sortname) ?></td>
                <td><?= h($countries->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Countries', 'action' => 'view', $countries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Countries', 'action' => 'edit', $countries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Countries', 'action' => 'delete', $countries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

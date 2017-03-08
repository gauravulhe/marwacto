<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <?php 
        // Add at the end of the trail
        $this->Breadcrumbs->add(
            'Users',
            ['controller' => 'users', 'action' => 'login']
        ); 
    ?>
    <fieldset>
        <legend><?= __('User Login') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Login')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $registrationTeams
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrationTeamUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registration Team Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeamUsers form content">
            <?= $this->Form->create($registrationTeamUser) ?>
            <fieldset>
                <legend><?= __('Edit Registration Team User') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('registration_team_id', ['options' => $registrationTeams, 'empty' => true]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

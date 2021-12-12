<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
 * @var \Cake\Collection\CollectionInterface|string[] $registrationTeams
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceLocalities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Registration Team Conference Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeamConferenceLocalities form content">
            <?= $this->Form->create($registrationTeamConferenceLocality) ?>
            <fieldset>
                <legend><?= __('Add Registration Team Conference Locality') ?></legend>
                <?php
                    echo $this->Form->control('registration_team_id', ['options' => $registrationTeams]);
                    echo $this->Form->control('conference_locality_id', ['options' => $conferenceLocalities]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

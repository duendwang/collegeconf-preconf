<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OnsiteRegistration $onsiteRegistration
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceAttendees
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $onsiteRegistration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $onsiteRegistration->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Onsite Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="onsiteRegistrations form content">
            <?= $this->Form->create($onsiteRegistration) ?>
            <fieldset>
                <legend><?= __('Edit Onsite Registration') ?></legend>
                <?php
                    echo $this->Form->control('conference_attendee_id', ['options' => $conferenceAttendees]);
                    echo $this->Form->control('registration');
                    echo $this->Form->control('cashier');
                    echo $this->Form->control('hospitality');
                    echo $this->Form->control('badge');
                    echo $this->Form->control('need_cashier');
                    echo $this->Form->control('need_hospitality');
                    echo $this->Form->control('need_badge');
                    echo $this->Form->control('need_old');
                    echo $this->Form->control('old_first');
                    echo $this->Form->control('old_last');
                    echo $this->Form->control('old_locality_id', ['options' => $localities, 'empty' => true]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

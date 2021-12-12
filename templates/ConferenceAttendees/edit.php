<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendee $conferenceAttendee
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 * @var string[]|\Cake\Collection\CollectionInterface $attendees
 * @var string[]|\Cake\Collection\CollectionInterface $lodgings
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceAttendee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendees form content">
            <?= $this->Form->create($conferenceAttendee) ?>
            <fieldset>
                <legend><?= __('Edit Conference Attendee') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('attendee_id', ['options' => $attendees]);
                    echo $this->Form->control('barcode_id');
                    echo $this->Form->control('conf_contact');
                    echo $this->Form->control('lodging_group');
                    echo $this->Form->control('lodging_id', ['options' => $lodgings, 'empty' => true]);
                    echo $this->Form->control('submitter');
                    echo $this->Form->control('rate');
                    echo $this->Form->control('amd_paid');
                    echo $this->Form->control('check_num');
                    echo $this->Form->control('paid_date', ['empty' => true]);
                    echo $this->Form->control('part_time');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

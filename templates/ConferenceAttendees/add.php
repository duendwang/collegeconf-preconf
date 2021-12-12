<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendee $conferenceAttendee
 * @var \Cake\Collection\CollectionInterface|string[] $conferences
 * @var \Cake\Collection\CollectionInterface|string[] $attendees
 * @var \Cake\Collection\CollectionInterface|string[] $lodgings
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conference Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendees form content">
            <?= $this->Form->create($conferenceAttendee) ?>
            <fieldset>
                <legend><?= __('Add Conference Attendee') ?></legend>
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

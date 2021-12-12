<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceAttendees
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceEvents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceAttendeeConferenceEvent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeConferenceEvent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Attendee Conference Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendeeConferenceEvents form content">
            <?= $this->Form->create($conferenceAttendeeConferenceEvent) ?>
            <fieldset>
                <legend><?= __('Edit Conference Attendee Conference Event') ?></legend>
                <?php
                    echo $this->Form->control('conference_attendee_id', ['options' => $conferenceAttendees]);
                    echo $this->Form->control('conference_event_id', ['options' => $conferenceEvents]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
 * @var string[]|\Cake\Collection\CollectionInterface $finances
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceAttendees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceAttendeeFinance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeFinance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Attendee Finances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendeeFinances form content">
            <?= $this->Form->create($conferenceAttendeeFinance) ?>
            <fieldset>
                <legend><?= __('Edit Conference Attendee Finance') ?></legend>
                <?php
                    echo $this->Form->control('finance_id', ['options' => $finances]);
                    echo $this->Form->control('add_conference_attendee_id');
                    echo $this->Form->control('cancel_conference_attendee_id', ['options' => $conferenceAttendees, 'empty' => true]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

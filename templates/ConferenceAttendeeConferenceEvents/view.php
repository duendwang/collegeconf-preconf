<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Attendee Conference Event'), ['action' => 'edit', $conferenceAttendeeConferenceEvent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Attendee Conference Event'), ['action' => 'delete', $conferenceAttendeeConferenceEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeConferenceEvent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Attendee Conference Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Attendee Conference Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendeeConferenceEvents view content">
            <h3><?= h($conferenceAttendeeConferenceEvent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $conferenceAttendeeConferenceEvent->has('conference_attendee') ? $this->Html->link($conferenceAttendeeConferenceEvent->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $conferenceAttendeeConferenceEvent->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Event') ?></th>
                    <td><?= $conferenceAttendeeConferenceEvent->has('conference_event') ? $this->Html->link($conferenceAttendeeConferenceEvent->conference_event->id, ['controller' => 'ConferenceEvents', 'action' => 'view', $conferenceAttendeeConferenceEvent->conference_event->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceAttendeeConferenceEvent->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceAttendeeConferenceEvent->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

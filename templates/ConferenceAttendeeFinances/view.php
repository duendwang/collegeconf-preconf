<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Attendee Finance'), ['action' => 'edit', $conferenceAttendeeFinance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Attendee Finance'), ['action' => 'delete', $conferenceAttendeeFinance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeFinance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Attendee Finances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Attendee Finance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendeeFinances view content">
            <h3><?= h($conferenceAttendeeFinance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Finance') ?></th>
                    <td><?= $conferenceAttendeeFinance->has('finance') ? $this->Html->link($conferenceAttendeeFinance->finance->id, ['controller' => 'Finances', 'action' => 'view', $conferenceAttendeeFinance->finance->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $conferenceAttendeeFinance->has('conference_attendee') ? $this->Html->link($conferenceAttendeeFinance->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $conferenceAttendeeFinance->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Add Conference Attendee Id') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->add_conference_attendee_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceAttendeeFinance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceAttendeeFinance->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

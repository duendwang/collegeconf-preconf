<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CheckIn $checkIn
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Check In'), ['action' => 'edit', $checkIn->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Check In'), ['action' => 'delete', $checkIn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkIn->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Check Ins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Check In'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="checkIns view content">
            <h3><?= h($checkIn->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $checkIn->has('conference_attendee') ? $this->Html->link($checkIn->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $checkIn->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($checkIn->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($checkIn->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($checkIn->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timestamp') ?></th>
                    <td><?= h($checkIn->timestamp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($checkIn->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($checkIn->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

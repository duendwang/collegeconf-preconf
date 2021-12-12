<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Collection\CollectionInterface $conferenceAttendeeConferenceEvents
 */
?>
<div class="conferenceAttendeeConferenceEvents index content">
    <?= $this->Html->link(__('New Conference Attendee Conference Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Attendee Conference Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_event_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceAttendeeConferenceEvents as $conferenceAttendeeConferenceEvent): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->id) ?></td>
                    <td><?= $conferenceAttendeeConferenceEvent->has('conference_attendee') ? $this->Html->link($conferenceAttendeeConferenceEvent->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $conferenceAttendeeConferenceEvent->conference_attendee->id]) : '' ?></td>
                    <td><?= $conferenceAttendeeConferenceEvent->has('conference_event') ? $this->Html->link($conferenceAttendeeConferenceEvent->conference_event->id, ['controller' => 'ConferenceEvents', 'action' => 'view', $conferenceAttendeeConferenceEvent->conference_event->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->creator) ?></td>
                    <td><?= h($conferenceAttendeeConferenceEvent->created) ?></td>
                    <td><?= $this->Number->format($conferenceAttendeeConferenceEvent->modifier) ?></td>
                    <td><?= h($conferenceAttendeeConferenceEvent->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceAttendeeConferenceEvent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceAttendeeConferenceEvent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceAttendeeConferenceEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeConferenceEvent->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendee[]|\Cake\Collection\CollectionInterface $conferenceAttendees
 */
?>
<div class="conferenceAttendees index content">
    <?= $this->Html->link(__('New Conference Attendee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Attendees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('barcode_id') ?></th>
                    <th><?= $this->Paginator->sort('conf_contact') ?></th>
                    <th><?= $this->Paginator->sort('lodging_group') ?></th>
                    <th><?= $this->Paginator->sort('lodging_id') ?></th>
                    <th><?= $this->Paginator->sort('submitter') ?></th>
                    <th><?= $this->Paginator->sort('rate') ?></th>
                    <th><?= $this->Paginator->sort('amd_paid') ?></th>
                    <th><?= $this->Paginator->sort('check_num') ?></th>
                    <th><?= $this->Paginator->sort('paid_date') ?></th>
                    <th><?= $this->Paginator->sort('part_time') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceAttendees as $conferenceAttendee): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceAttendee->id) ?></td>
                    <td><?= $conferenceAttendee->has('conference') ? $this->Html->link($conferenceAttendee->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceAttendee->conference->id]) : '' ?></td>
                    <td><?= $conferenceAttendee->has('attendee') ? $this->Html->link($conferenceAttendee->attendee->id, ['controller' => 'Attendees', 'action' => 'view', $conferenceAttendee->attendee->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceAttendee->barcode_id) ?></td>
                    <td><?= h($conferenceAttendee->conf_contact) ?></td>
                    <td><?= h($conferenceAttendee->lodging_group) ?></td>
                    <td><?= $conferenceAttendee->has('lodging') ? $this->Html->link($conferenceAttendee->lodging->name, ['controller' => 'Lodgings', 'action' => 'view', $conferenceAttendee->lodging->id]) : '' ?></td>
                    <td><?= h($conferenceAttendee->submitter) ?></td>
                    <td><?= $this->Number->format($conferenceAttendee->rate) ?></td>
                    <td><?= $this->Number->format($conferenceAttendee->amd_paid) ?></td>
                    <td><?= h($conferenceAttendee->check_num) ?></td>
                    <td><?= h($conferenceAttendee->paid_date) ?></td>
                    <td><?= h($conferenceAttendee->part_time) ?></td>
                    <td><?= $this->Number->format($conferenceAttendee->creator) ?></td>
                    <td><?= h($conferenceAttendee->created) ?></td>
                    <td><?= $this->Number->format($conferenceAttendee->modifier) ?></td>
                    <td><?= h($conferenceAttendee->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceAttendee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceAttendee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceAttendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendee->id)]) ?>
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

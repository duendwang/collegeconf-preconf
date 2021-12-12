<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Collection\CollectionInterface $conferenceAttendeeFinances
 */
?>
<div class="conferenceAttendeeFinances index content">
    <?= $this->Html->link(__('New Conference Attendee Finance'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Attendee Finances') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('finance_id') ?></th>
                    <th><?= $this->Paginator->sort('add_conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('cancel_conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceAttendeeFinances as $conferenceAttendeeFinance): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->id) ?></td>
                    <td><?= $conferenceAttendeeFinance->has('finance') ? $this->Html->link($conferenceAttendeeFinance->finance->id, ['controller' => 'Finances', 'action' => 'view', $conferenceAttendeeFinance->finance->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->add_conference_attendee_id) ?></td>
                    <td><?= $conferenceAttendeeFinance->has('conference_attendee') ? $this->Html->link($conferenceAttendeeFinance->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $conferenceAttendeeFinance->conference_attendee->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->creator) ?></td>
                    <td><?= h($conferenceAttendeeFinance->created) ?></td>
                    <td><?= $this->Number->format($conferenceAttendeeFinance->modifier) ?></td>
                    <td><?= h($conferenceAttendeeFinance->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceAttendeeFinance->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceAttendeeFinance->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceAttendeeFinance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeFinance->id)]) ?>
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

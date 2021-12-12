<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CheckIn[]|\Cake\Collection\CollectionInterface $checkIns
 */
?>
<div class="checkIns index content">
    <?= $this->Html->link(__('New Check In'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Check Ins') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('timestamp') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkIns as $checkIn): ?>
                <tr>
                    <td><?= $this->Number->format($checkIn->id) ?></td>
                    <td><?= $checkIn->has('conference_attendee') ? $this->Html->link($checkIn->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $checkIn->conference_attendee->id]) : '' ?></td>
                    <td><?= h($checkIn->timestamp) ?></td>
                    <td><?= $this->Number->format($checkIn->creator) ?></td>
                    <td><?= h($checkIn->created) ?></td>
                    <td><?= $this->Number->format($checkIn->modifier) ?></td>
                    <td><?= h($checkIn->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $checkIn->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checkIn->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checkIn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkIn->id)]) ?>
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

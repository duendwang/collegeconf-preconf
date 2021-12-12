<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee[]|\Cake\Collection\CollectionInterface $attendees
 */
?>
<div class="attendees index content">
    <?= $this->Html->link(__('New Attendee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attendees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('campus_id') ?></th>
                    <th><?= $this->Paginator->sort('new_one') ?></th>
                    <th><?= $this->Paginator->sort('allergies') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('city_state') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendees as $attendee): ?>
                <tr>
                    <td><?= $this->Number->format($attendee->id) ?></td>
                    <td><?= h($attendee->first_name) ?></td>
                    <td><?= h($attendee->last_name) ?></td>
                    <td><?= h($attendee->gender) ?></td>
                    <td><?= $attendee->has('locality') ? $this->Html->link($attendee->locality->name, ['controller' => 'Localities', 'action' => 'view', $attendee->locality->id]) : '' ?></td>
                    <td><?= $attendee->has('campus') ? $this->Html->link($attendee->campus->name, ['controller' => 'Campuses', 'action' => 'view', $attendee->campus->id]) : '' ?></td>
                    <td><?= h($attendee->new_one) ?></td>
                    <td><?= h($attendee->allergies) ?></td>
                    <td><?= $attendee->has('status') ? $this->Html->link($attendee->status->name, ['controller' => 'Statuses', 'action' => 'view', $attendee->status->id]) : '' ?></td>
                    <td><?= h($attendee->cell_phone) ?></td>
                    <td><?= h($attendee->email) ?></td>
                    <td><?= h($attendee->city_state) ?></td>
                    <td><?= $this->Number->format($attendee->creator) ?></td>
                    <td><?= h($attendee->created) ?></td>
                    <td><?= $this->Number->format($attendee->modifier) ?></td>
                    <td><?= h($attendee->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attendee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PotentialAttendee[]|\Cake\Collection\CollectionInterface $potentialAttendees
 */
?>
<div class="potentialAttendees index content">
    <?= $this->Html->link(__('New Potential Attendee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Potential Attendees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('campus_id') ?></th>
                    <th><?= $this->Paginator->sort('allergies') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($potentialAttendees as $potentialAttendee): ?>
                <tr>
                    <td><?= $this->Number->format($potentialAttendee->id) ?></td>
                    <td><?= $potentialAttendee->has('conference') ? $this->Html->link($potentialAttendee->conference->id, ['controller' => 'Conferences', 'action' => 'view', $potentialAttendee->conference->id]) : '' ?></td>
                    <td><?= h($potentialAttendee->first_name) ?></td>
                    <td><?= h($potentialAttendee->last_name) ?></td>
                    <td><?= h($potentialAttendee->gender) ?></td>
                    <td><?= $potentialAttendee->has('locality') ? $this->Html->link($potentialAttendee->locality->name, ['controller' => 'Localities', 'action' => 'view', $potentialAttendee->locality->id]) : '' ?></td>
                    <td><?= $potentialAttendee->has('campus') ? $this->Html->link($potentialAttendee->campus->name, ['controller' => 'Campuses', 'action' => 'view', $potentialAttendee->campus->id]) : '' ?></td>
                    <td><?= h($potentialAttendee->allergies) ?></td>
                    <td><?= $potentialAttendee->has('status') ? $this->Html->link($potentialAttendee->status->name, ['controller' => 'Statuses', 'action' => 'view', $potentialAttendee->status->id]) : '' ?></td>
                    <td><?= h($potentialAttendee->cell_phone) ?></td>
                    <td><?= h($potentialAttendee->email) ?></td>
                    <td><?= h($potentialAttendee->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $potentialAttendee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $potentialAttendee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $potentialAttendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $potentialAttendee->id)]) ?>
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

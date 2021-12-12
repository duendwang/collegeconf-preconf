<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cancel[]|\Cake\Collection\CollectionInterface $cancels
 */
?>
<div class="cancels index content">
    <?= $this->Html->link(__('New Cancel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cancels') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('replaced') ?></th>
                    <th><?= $this->Paginator->sort('excused') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cancels as $cancel): ?>
                <tr>
                    <td><?= $this->Number->format($cancel->id) ?></td>
                    <td><?= $cancel->has('conference_attendee') ? $this->Html->link($cancel->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $cancel->conference_attendee->id]) : '' ?></td>
                    <td><?= h($cancel->replaced) ?></td>
                    <td><?= h($cancel->excused) ?></td>
                    <td><?= $this->Number->format($cancel->creator) ?></td>
                    <td><?= h($cancel->created) ?></td>
                    <td><?= $this->Number->format($cancel->modifier) ?></td>
                    <td><?= h($cancel->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cancel->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cancel->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cancel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancel->id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadline[]|\Cake\Collection\CollectionInterface $conferenceDeadlines
 */
?>
<div class="conferenceDeadlines index content">
    <?= $this->Html->link(__('New Conference Deadline'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Deadlines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('weeks_before') ?></th>
                    <th><?= $this->Paginator->sort('weekday') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceDeadlines as $conferenceDeadline): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceDeadline->id) ?></td>
                    <td><?= h($conferenceDeadline->name) ?></td>
                    <td><?= $this->Number->format($conferenceDeadline->weeks_before) ?></td>
                    <td><?= $this->Number->format($conferenceDeadline->weekday) ?></td>
                    <td><?= h($conferenceDeadline->time) ?></td>
                    <td><?= $this->Number->format($conferenceDeadline->creator) ?></td>
                    <td><?= h($conferenceDeadline->created) ?></td>
                    <td><?= $this->Number->format($conferenceDeadline->modifier) ?></td>
                    <td><?= h($conferenceDeadline->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceDeadline->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceDeadline->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceDeadline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadline->id)]) ?>
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

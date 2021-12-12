<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Collection\CollectionInterface $conferenceDeadlineExceptions
 */
?>
<div class="conferenceDeadlineExceptions index content">
    <?= $this->Html->link(__('New Conference Deadline Exception'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Deadline Exceptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_deadline_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceDeadlineExceptions as $conferenceDeadlineException): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceDeadlineException->id) ?></td>
                    <td><?= $conferenceDeadlineException->has('conference') ? $this->Html->link($conferenceDeadlineException->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceDeadlineException->conference->id]) : '' ?></td>
                    <td><?= $conferenceDeadlineException->has('conference_deadline') ? $this->Html->link($conferenceDeadlineException->conference_deadline->name, ['controller' => 'ConferenceDeadlines', 'action' => 'view', $conferenceDeadlineException->conference_deadline->id]) : '' ?></td>
                    <td><?= h($conferenceDeadlineException->date) ?></td>
                    <td><?= h($conferenceDeadlineException->time) ?></td>
                    <td><?= $this->Number->format($conferenceDeadlineException->creator) ?></td>
                    <td><?= h($conferenceDeadlineException->created) ?></td>
                    <td><?= $this->Number->format($conferenceDeadlineException->modifier) ?></td>
                    <td><?= h($conferenceDeadlineException->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceDeadlineException->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceDeadlineException->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceDeadlineException->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineException->id)]) ?>
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

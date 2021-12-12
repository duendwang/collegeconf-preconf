<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Collection\CollectionInterface $conferenceDeadlineAccountTypes
 */
?>
<div class="conferenceDeadlineAccountTypes index content">
    <?= $this->Html->link(__('New Conference Deadline Account Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Deadline Account Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_deadline_id') ?></th>
                    <th><?= $this->Paginator->sort('account_type_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceDeadlineAccountTypes as $conferenceDeadlineAccountType): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->id) ?></td>
                    <td><?= $conferenceDeadlineAccountType->has('conference_deadline') ? $this->Html->link($conferenceDeadlineAccountType->conference_deadline->name, ['controller' => 'ConferenceDeadlines', 'action' => 'view', $conferenceDeadlineAccountType->conference_deadline->id]) : '' ?></td>
                    <td><?= $conferenceDeadlineAccountType->has('account_type') ? $this->Html->link($conferenceDeadlineAccountType->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $conferenceDeadlineAccountType->account_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->creator) ?></td>
                    <td><?= h($conferenceDeadlineAccountType->created) ?></td>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->modifier) ?></td>
                    <td><?= h($conferenceDeadlineAccountType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceDeadlineAccountType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceDeadlineAccountType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceDeadlineAccountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineAccountType->id)]) ?>
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

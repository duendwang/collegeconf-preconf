<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailException[]|\Cake\Collection\CollectionInterface $emailExceptions
 */
?>
<div class="emailExceptions index content">
    <?= $this->Html->link(__('New Email Exception'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Email Exceptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('subject') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emailExceptions as $emailException): ?>
                <tr>
                    <td><?= $this->Number->format($emailException->id) ?></td>
                    <td><?= $emailException->has('email') ? $this->Html->link($emailException->email->name, ['controller' => 'Emails', 'action' => 'view', $emailException->email->id]) : '' ?></td>
                    <td><?= $emailException->has('conference') ? $this->Html->link($emailException->conference->id, ['controller' => 'Conferences', 'action' => 'view', $emailException->conference->id]) : '' ?></td>
                    <td><?= h($emailException->subject) ?></td>
                    <td><?= $this->Number->format($emailException->creator) ?></td>
                    <td><?= h($emailException->created) ?></td>
                    <td><?= $this->Number->format($emailException->modifier) ?></td>
                    <td><?= h($emailException->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $emailException->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailException->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailException->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailException->id)]) ?>
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

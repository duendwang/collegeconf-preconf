<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailVariable[]|\Cake\Collection\CollectionInterface $emailVariables
 */
?>
<div class="emailVariables index content">
    <?= $this->Html->link(__('New Email Variable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Email Variables') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emailVariables as $emailVariable): ?>
                <tr>
                    <td><?= $this->Number->format($emailVariable->id) ?></td>
                    <td><?= h($emailVariable->name) ?></td>
                    <td><?= h($emailVariable->value) ?></td>
                    <td><?= $this->Number->format($emailVariable->creator) ?></td>
                    <td><?= h($emailVariable->created) ?></td>
                    <td><?= $this->Number->format($emailVariable->modifier) ?></td>
                    <td><?= h($emailVariable->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $emailVariable->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailVariable->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailVariable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailVariable->id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus[]|\Cake\Collection\CollectionInterface $campuses
 */
?>
<div class="campuses index content">
    <?= $this->Html->link(__('New Campus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Campuses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campuses as $campus): ?>
                <tr>
                    <td><?= $this->Number->format($campus->id) ?></td>
                    <td><?= h($campus->name) ?></td>
                    <td><?= h($campus->code) ?></td>
                    <td><?= $this->Number->format($campus->creator) ?></td>
                    <td><?= h($campus->created) ?></td>
                    <td><?= $this->Number->format($campus->modifier) ?></td>
                    <td><?= h($campus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $campus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campus->id)]) ?>
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

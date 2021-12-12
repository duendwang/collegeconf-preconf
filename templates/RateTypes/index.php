<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RateType[]|\Cake\Collection\CollectionInterface $rateTypes
 */
?>
<div class="rateTypes index content">
    <?= $this->Html->link(__('New Rate Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rate Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rateTypes as $rateType): ?>
                <tr>
                    <td><?= $this->Number->format($rateType->id) ?></td>
                    <td><?= h($rateType->name) ?></td>
                    <td><?= $this->Number->format($rateType->creator) ?></td>
                    <td><?= h($rateType->created) ?></td>
                    <td><?= $this->Number->format($rateType->modifier) ?></td>
                    <td><?= h($rateType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rateType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rateType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rateType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateType->id)]) ?>
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

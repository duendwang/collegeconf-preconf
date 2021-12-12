<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finance[]|\Cake\Collection\CollectionInterface $finances
 */
?>
<div class="finances index content">
    <?= $this->Html->link(__('New Finance'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finances') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('receive_date') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('finance_type_id') ?></th>
                    <th><?= $this->Paginator->sort('count') ?></th>
                    <th><?= $this->Paginator->sort('rate') ?></th>
                    <th><?= $this->Paginator->sort('charge') ?></th>
                    <th><?= $this->Paginator->sort('payment') ?></th>
                    <th><?= $this->Paginator->sort('balance') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finances as $finance): ?>
                <tr>
                    <td><?= $this->Number->format($finance->id) ?></td>
                    <td><?= $finance->has('conference') ? $this->Html->link($finance->conference->id, ['controller' => 'Conferences', 'action' => 'view', $finance->conference->id]) : '' ?></td>
                    <td><?= h($finance->receive_date) ?></td>
                    <td><?= $finance->has('locality') ? $this->Html->link($finance->locality->name, ['controller' => 'Localities', 'action' => 'view', $finance->locality->id]) : '' ?></td>
                    <td><?= $finance->has('finance_type') ? $this->Html->link($finance->finance_type->name, ['controller' => 'FinanceTypes', 'action' => 'view', $finance->finance_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($finance->count) ?></td>
                    <td><?= $this->Number->format($finance->rate) ?></td>
                    <td><?= $this->Number->format($finance->charge) ?></td>
                    <td><?= $this->Number->format($finance->payment) ?></td>
                    <td><?= $this->Number->format($finance->balance) ?></td>
                    <td><?= $this->Number->format($finance->creator) ?></td>
                    <td><?= h($finance->created) ?></td>
                    <td><?= $this->Number->format($finance->modifier) ?></td>
                    <td><?= h($finance->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finance->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finance->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finance->id)]) ?>
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

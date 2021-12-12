<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lrc[]|\Cake\Collection\CollectionInterface $lrcs
 */
?>
<div class="lrcs index content">
    <?= $this->Html->link(__('New Lrc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lrcs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lrcs as $lrc): ?>
                <tr>
                    <td><?= $this->Number->format($lrc->id) ?></td>
                    <td><?= h($lrc->last_name) ?></td>
                    <td><?= h($lrc->first_name) ?></td>
                    <td><?= $lrc->has('locality') ? $this->Html->link($lrc->locality->name, ['controller' => 'Localities', 'action' => 'view', $lrc->locality->id]) : '' ?></td>
                    <td><?= h($lrc->gender) ?></td>
                    <td><?= h($lrc->cell_phone) ?></td>
                    <td><?= h($lrc->email) ?></td>
                    <td><?= h($lrc->active) ?></td>
                    <td><?= $this->Number->format($lrc->creator) ?></td>
                    <td><?= h($lrc->created) ?></td>
                    <td><?= $this->Number->format($lrc->modifier) ?></td>
                    <td><?= h($lrc->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lrc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lrc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lrc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lrc->id)]) ?>
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

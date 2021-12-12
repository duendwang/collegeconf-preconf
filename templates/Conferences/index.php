<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference[]|\Cake\Collection\CollectionInterface $conferences
 */
?>
<div class="conferences index content">
    <?= $this->Html->link(__('New Conference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conferences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('term') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('part') ?></th>
                    <th><?= $this->Paginator->sort('conference_location_id') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('last_barcode_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferences as $conference): ?>
                <tr>
                    <td><?= $this->Number->format($conference->id) ?></td>
                    <td><?= h($conference->term) ?></td>
                    <td><?= h($conference->year) ?></td>
                    <td><?= h($conference->part) ?></td>
                    <td><?= $conference->has('conference_location') ? $this->Html->link($conference->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $conference->conference_location->id]) : '' ?></td>
                    <td><?= h($conference->start_date) ?></td>
                    <td><?= h($conference->code) ?></td>
                    <td><?= $this->Number->format($conference->last_barcode_id) ?></td>
                    <td><?= $this->Number->format($conference->creator) ?></td>
                    <td><?= h($conference->created) ?></td>
                    <td><?= $this->Number->format($conference->modifier) ?></td>
                    <td><?= h($conference->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conference->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conference->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id)]) ?>
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

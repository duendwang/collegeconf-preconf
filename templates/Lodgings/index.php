<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lodging[]|\Cake\Collection\CollectionInterface $lodgings
 */
?>
<div class="lodgings index content">
    <?= $this->Html->link(__('New Lodging'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lodgings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('home_phone') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('pet') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('capacity') ?></th>
                    <th><?= $this->Paginator->sort('attendee_count') ?></th>
                    <th><?= $this->Paginator->sort('room') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lodgings as $lodging): ?>
                <tr>
                    <td><?= $this->Number->format($lodging->id) ?></td>
                    <td><?= $lodging->has('conference') ? $this->Html->link($lodging->conference->id, ['controller' => 'Conferences', 'action' => 'view', $lodging->conference->id]) : '' ?></td>
                    <td><?= $lodging->has('locality') ? $this->Html->link($lodging->locality->name, ['controller' => 'Localities', 'action' => 'view', $lodging->locality->id]) : '' ?></td>
                    <td><?= h($lodging->code) ?></td>
                    <td><?= h($lodging->name) ?></td>
                    <td><?= h($lodging->address) ?></td>
                    <td><?= h($lodging->city) ?></td>
                    <td><?= h($lodging->zip) ?></td>
                    <td><?= h($lodging->home_phone) ?></td>
                    <td><?= h($lodging->cell_phone) ?></td>
                    <td><?= h($lodging->pet) ?></td>
                    <td><?= h($lodging->gender) ?></td>
                    <td><?= $this->Number->format($lodging->capacity) ?></td>
                    <td><?= $this->Number->format($lodging->attendee_count) ?></td>
                    <td><?= h($lodging->room) ?></td>
                    <td><?= $this->Number->format($lodging->creator) ?></td>
                    <td><?= h($lodging->created) ?></td>
                    <td><?= $this->Number->format($lodging->modifier) ?></td>
                    <td><?= h($lodging->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lodging->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lodging->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lodging->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodging->id)]) ?>
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

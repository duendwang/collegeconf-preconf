<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LodgingFacility[]|\Cake\Collection\CollectionInterface $lodgingFacilities
 */
?>
<div class="lodgingFacilities index content">
    <?= $this->Html->link(__('New Lodging Facility'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lodging Facilities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_location_id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('room') ?></th>
                    <th><?= $this->Paginator->sort('accomodations') ?></th>
                    <th><?= $this->Paginator->sort('capacity') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('comments') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lodgingFacilities as $lodgingFacility): ?>
                <tr>
                    <td><?= $this->Number->format($lodgingFacility->id) ?></td>
                    <td><?= $lodgingFacility->has('conference_location') ? $this->Html->link($lodgingFacility->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $lodgingFacility->conference_location->id]) : '' ?></td>
                    <td><?= h($lodgingFacility->code) ?></td>
                    <td><?= h($lodgingFacility->location) ?></td>
                    <td><?= h($lodgingFacility->room) ?></td>
                    <td><?= h($lodgingFacility->accomodations) ?></td>
                    <td><?= $this->Number->format($lodgingFacility->capacity) ?></td>
                    <td><?= h($lodgingFacility->address) ?></td>
                    <td><?= h($lodgingFacility->city) ?></td>
                    <td><?= h($lodgingFacility->zip) ?></td>
                    <td><?= h($lodgingFacility->phone) ?></td>
                    <td><?= h($lodgingFacility->comments) ?></td>
                    <td><?= $this->Number->format($lodgingFacility->creator) ?></td>
                    <td><?= h($lodgingFacility->created) ?></td>
                    <td><?= $this->Number->format($lodgingFacility->modifier) ?></td>
                    <td><?= h($lodgingFacility->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lodgingFacility->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lodgingFacility->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lodgingFacility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodgingFacility->id)]) ?>
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

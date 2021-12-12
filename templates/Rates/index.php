<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rate[]|\Cake\Collection\CollectionInterface $rates
 */
?>
<div class="rates index content">
    <?= $this->Html->link(__('New Rate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_location_id') ?></th>
                    <th><?= $this->Paginator->sort('rate_type_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('latefee_applies') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rates as $rate): ?>
                <tr>
                    <td><?= $this->Number->format($rate->id) ?></td>
                    <td><?= $rate->has('conference_location') ? $this->Html->link($rate->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $rate->conference_location->id]) : '' ?></td>
                    <td><?= $rate->has('rate_type') ? $this->Html->link($rate->rate_type->name, ['controller' => 'RateTypes', 'action' => 'view', $rate->rate_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($rate->cost) ?></td>
                    <td><?= h($rate->latefee_applies) ?></td>
                    <td><?= h($rate->active) ?></td>
                    <td><?= $this->Number->format($rate->creator) ?></td>
                    <td><?= h($rate->created) ?></td>
                    <td><?= $this->Number->format($rate->modifier) ?></td>
                    <td><?= h($rate->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rate->id)]) ?>
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

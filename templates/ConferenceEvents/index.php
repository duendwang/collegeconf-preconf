<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceEvent[]|\Cake\Collection\CollectionInterface $conferenceEvents
 */
?>
<div class="conferenceEvents index content">
    <?= $this->Html->link(__('New Conference Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceEvents as $conferenceEvent): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceEvent->id) ?></td>
                    <td><?= $conferenceEvent->has('conference') ? $this->Html->link($conferenceEvent->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceEvent->conference->id]) : '' ?></td>
                    <td><?= $conferenceEvent->has('event') ? $this->Html->link($conferenceEvent->event->name, ['controller' => 'Events', 'action' => 'view', $conferenceEvent->event->id]) : '' ?></td>
                    <td><?= $this->Number->format($conferenceEvent->creator) ?></td>
                    <td><?= h($conferenceEvent->created) ?></td>
                    <td><?= $this->Number->format($conferenceEvent->modifier) ?></td>
                    <td><?= h($conferenceEvent->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceEvent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceEvent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceEvent->id)]) ?>
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

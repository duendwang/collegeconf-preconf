<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OnsiteRegistration[]|\Cake\Collection\CollectionInterface $onsiteRegistrations
 */
?>
<div class="onsiteRegistrations index content">
    <?= $this->Html->link(__('New Onsite Registration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Onsite Registrations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('registration') ?></th>
                    <th><?= $this->Paginator->sort('cashier') ?></th>
                    <th><?= $this->Paginator->sort('hospitality') ?></th>
                    <th><?= $this->Paginator->sort('badge') ?></th>
                    <th><?= $this->Paginator->sort('need_cashier') ?></th>
                    <th><?= $this->Paginator->sort('need_hospitality') ?></th>
                    <th><?= $this->Paginator->sort('need_badge') ?></th>
                    <th><?= $this->Paginator->sort('need_old') ?></th>
                    <th><?= $this->Paginator->sort('old_first') ?></th>
                    <th><?= $this->Paginator->sort('old_last') ?></th>
                    <th><?= $this->Paginator->sort('old_locality_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($onsiteRegistrations as $onsiteRegistration): ?>
                <tr>
                    <td><?= $this->Number->format($onsiteRegistration->id) ?></td>
                    <td><?= $onsiteRegistration->has('conference_attendee') ? $this->Html->link($onsiteRegistration->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $onsiteRegistration->conference_attendee->id]) : '' ?></td>
                    <td><?= h($onsiteRegistration->registration) ?></td>
                    <td><?= h($onsiteRegistration->cashier) ?></td>
                    <td><?= h($onsiteRegistration->hospitality) ?></td>
                    <td><?= h($onsiteRegistration->badge) ?></td>
                    <td><?= h($onsiteRegistration->need_cashier) ?></td>
                    <td><?= h($onsiteRegistration->need_hospitality) ?></td>
                    <td><?= h($onsiteRegistration->need_badge) ?></td>
                    <td><?= h($onsiteRegistration->need_old) ?></td>
                    <td><?= h($onsiteRegistration->old_first) ?></td>
                    <td><?= h($onsiteRegistration->old_last) ?></td>
                    <td><?= $onsiteRegistration->has('locality') ? $this->Html->link($onsiteRegistration->locality->name, ['controller' => 'Localities', 'action' => 'view', $onsiteRegistration->locality->id]) : '' ?></td>
                    <td><?= $this->Number->format($onsiteRegistration->creator) ?></td>
                    <td><?= h($onsiteRegistration->created) ?></td>
                    <td><?= $this->Number->format($onsiteRegistration->modifier) ?></td>
                    <td><?= h($onsiteRegistration->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $onsiteRegistration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $onsiteRegistration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $onsiteRegistration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $onsiteRegistration->id)]) ?>
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

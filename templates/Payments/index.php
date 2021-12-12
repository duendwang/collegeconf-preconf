<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payments
 */
?>
<div class="payments index content">
    <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Payments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('conference_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_attendee_id') ?></th>
                    <th><?= $this->Paginator->sort('locality_id') ?></th>
                    <th><?= $this->Paginator->sort('cash') ?></th>
                    <th><?= $this->Paginator->sort('check_number') ?></th>
                    <th><?= $this->Paginator->sort('check') ?></th>
                    <th><?= $this->Paginator->sort('credit_card') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment): ?>
                <tr>
                    <td><?= $this->Number->format($payment->id) ?></td>
                    <td><?= h($payment->date) ?></td>
                    <td><?= $payment->has('conference') ? $this->Html->link($payment->conference->id, ['controller' => 'Conferences', 'action' => 'view', $payment->conference->id]) : '' ?></td>
                    <td><?= $payment->has('conference_attendee') ? $this->Html->link($payment->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $payment->conference_attendee->id]) : '' ?></td>
                    <td><?= $payment->has('locality') ? $this->Html->link($payment->locality->name, ['controller' => 'Localities', 'action' => 'view', $payment->locality->id]) : '' ?></td>
                    <td><?= $this->Number->format($payment->cash) ?></td>
                    <td><?= $this->Number->format($payment->check_number) ?></td>
                    <td><?= $this->Number->format($payment->check) ?></td>
                    <td><?= $this->Number->format($payment->credit_card) ?></td>
                    <td><?= $this->Number->format($payment->creator) ?></td>
                    <td><?= h($payment->created) ?></td>
                    <td><?= $this->Number->format($payment->modifier) ?></td>
                    <td><?= h($payment->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
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

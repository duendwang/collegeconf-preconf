<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments view content">
            <h3><?= h($payment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $payment->has('conference') ? $this->Html->link($payment->conference->id, ['controller' => 'Conferences', 'action' => 'view', $payment->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $payment->has('conference_attendee') ? $this->Html->link($payment->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $payment->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $payment->has('locality') ? $this->Html->link($payment->locality->name, ['controller' => 'Localities', 'action' => 'view', $payment->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cash') ?></th>
                    <td><?= $this->Number->format($payment->cash) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check Number') ?></th>
                    <td><?= $this->Number->format($payment->check_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check') ?></th>
                    <td><?= $this->Number->format($payment->check) ?></td>
                </tr>
                <tr>
                    <th><?= __('Credit Card') ?></th>
                    <td><?= $this->Number->format($payment->credit_card) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($payment->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($payment->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($payment->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($payment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($payment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($payment->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

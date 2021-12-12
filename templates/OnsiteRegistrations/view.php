<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OnsiteRegistration $onsiteRegistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Onsite Registration'), ['action' => 'edit', $onsiteRegistration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Onsite Registration'), ['action' => 'delete', $onsiteRegistration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $onsiteRegistration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Onsite Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Onsite Registration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="onsiteRegistrations view content">
            <h3><?= h($onsiteRegistration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $onsiteRegistration->has('conference_attendee') ? $this->Html->link($onsiteRegistration->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $onsiteRegistration->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Old First') ?></th>
                    <td><?= h($onsiteRegistration->old_first) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Last') ?></th>
                    <td><?= h($onsiteRegistration->old_last) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $onsiteRegistration->has('locality') ? $this->Html->link($onsiteRegistration->locality->name, ['controller' => 'Localities', 'action' => 'view', $onsiteRegistration->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($onsiteRegistration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($onsiteRegistration->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($onsiteRegistration->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration') ?></th>
                    <td><?= h($onsiteRegistration->registration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cashier') ?></th>
                    <td><?= h($onsiteRegistration->cashier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospitality') ?></th>
                    <td><?= h($onsiteRegistration->hospitality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Badge') ?></th>
                    <td><?= h($onsiteRegistration->badge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($onsiteRegistration->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($onsiteRegistration->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Need Cashier') ?></th>
                    <td><?= $onsiteRegistration->need_cashier ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Need Hospitality') ?></th>
                    <td><?= $onsiteRegistration->need_hospitality ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Need Badge') ?></th>
                    <td><?= $onsiteRegistration->need_badge ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Need Old') ?></th>
                    <td><?= $onsiteRegistration->need_old ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

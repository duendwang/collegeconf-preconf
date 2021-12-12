<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cancel $cancel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cancel'), ['action' => 'edit', $cancel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cancel'), ['action' => 'delete', $cancel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cancels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cancel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cancels view content">
            <h3><?= h($cancel->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Attendee') ?></th>
                    <td><?= $cancel->has('conference_attendee') ? $this->Html->link($cancel->conference_attendee->id, ['controller' => 'ConferenceAttendees', 'action' => 'view', $cancel->conference_attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Replaced') ?></th>
                    <td><?= h($cancel->replaced) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cancel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($cancel->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($cancel->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cancel->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cancel->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Excused') ?></th>
                    <td><?= $cancel->excused ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cancel->reason)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cancel->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

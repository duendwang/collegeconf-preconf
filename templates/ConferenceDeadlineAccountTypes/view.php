<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Deadline Account Type'), ['action' => 'edit', $conferenceDeadlineAccountType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Deadline Account Type'), ['action' => 'delete', $conferenceDeadlineAccountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineAccountType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Deadline Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Deadline Account Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlineAccountTypes view content">
            <h3><?= h($conferenceDeadlineAccountType->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Deadline') ?></th>
                    <td><?= $conferenceDeadlineAccountType->has('conference_deadline') ? $this->Html->link($conferenceDeadlineAccountType->conference_deadline->name, ['controller' => 'ConferenceDeadlines', 'action' => 'view', $conferenceDeadlineAccountType->conference_deadline->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Account Type') ?></th>
                    <td><?= $conferenceDeadlineAccountType->has('account_type') ? $this->Html->link($conferenceDeadlineAccountType->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $conferenceDeadlineAccountType->account_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineAccountType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceDeadlineAccountType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceDeadlineAccountType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($conferenceDeadlineAccountType->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

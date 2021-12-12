<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Deadline Exception'), ['action' => 'edit', $conferenceDeadlineException->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Deadline Exception'), ['action' => 'delete', $conferenceDeadlineException->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineException->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Deadline Exceptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Deadline Exception'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlineExceptions view content">
            <h3><?= h($conferenceDeadlineException->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $conferenceDeadlineException->has('conference') ? $this->Html->link($conferenceDeadlineException->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceDeadlineException->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Deadline') ?></th>
                    <td><?= $conferenceDeadlineException->has('conference_deadline') ? $this->Html->link($conferenceDeadlineException->conference_deadline->name, ['controller' => 'ConferenceDeadlines', 'action' => 'view', $conferenceDeadlineException->conference_deadline->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineException->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineException->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceDeadlineException->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($conferenceDeadlineException->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($conferenceDeadlineException->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceDeadlineException->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceDeadlineException->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadline $conferenceDeadline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Deadline'), ['action' => 'edit', $conferenceDeadline->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Deadline'), ['action' => 'delete', $conferenceDeadline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadline->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Deadlines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Deadline'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlines view content">
            <h3><?= h($conferenceDeadline->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($conferenceDeadline->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceDeadline->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weeks Before') ?></th>
                    <td><?= $this->Number->format($conferenceDeadline->weeks_before) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weekday') ?></th>
                    <td><?= $this->Number->format($conferenceDeadline->weekday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceDeadline->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceDeadline->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($conferenceDeadline->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceDeadline->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceDeadline->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conference Deadline Account Types') ?></h4>
                <?php if (!empty($conferenceDeadline->conference_deadline_account_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Deadline Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceDeadline->conference_deadline_account_types as $conferenceDeadlineAccountTypes) : ?>
                        <tr>
                            <td><?= h($conferenceDeadlineAccountTypes->id) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->conference_deadline_id) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->account_type_id) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->notes) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->creator) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->created) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->modifier) ?></td>
                            <td><?= h($conferenceDeadlineAccountTypes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceDeadlineAccountTypes', 'action' => 'view', $conferenceDeadlineAccountTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceDeadlineAccountTypes', 'action' => 'edit', $conferenceDeadlineAccountTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceDeadlineAccountTypes', 'action' => 'delete', $conferenceDeadlineAccountTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineAccountTypes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Deadline Exceptions') ?></h4>
                <?php if (!empty($conferenceDeadline->conference_deadline_exceptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Conference Deadline Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Time') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceDeadline->conference_deadline_exceptions as $conferenceDeadlineExceptions) : ?>
                        <tr>
                            <td><?= h($conferenceDeadlineExceptions->id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->conference_id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->conference_deadline_id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->date) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->time) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->creator) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->created) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->modifier) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'view', $conferenceDeadlineExceptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'edit', $conferenceDeadlineExceptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'delete', $conferenceDeadlineExceptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineExceptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Account Type'), ['action' => 'edit', $accountType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account Type'), ['action' => 'delete', $accountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Account Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountTypes view content">
            <h3><?= h($accountType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($accountType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($accountType->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($accountType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($accountType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accountType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Deadline Account Types') ?></h4>
                <?php if (!empty($accountType->conference_deadline_account_types)) : ?>
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
                        <?php foreach ($accountType->conference_deadline_account_types as $conferenceDeadlineAccountTypes) : ?>
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
                <h4><?= __('Related User Account Types') ?></h4>
                <?php if (!empty($accountType->user_account_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($accountType->user_account_types as $userAccountTypes) : ?>
                        <tr>
                            <td><?= h($userAccountTypes->id) ?></td>
                            <td><?= h($userAccountTypes->user_id) ?></td>
                            <td><?= h($userAccountTypes->account_type_id) ?></td>
                            <td><?= h($userAccountTypes->creator) ?></td>
                            <td><?= h($userAccountTypes->created) ?></td>
                            <td><?= h($userAccountTypes->modifier) ?></td>
                            <td><?= h($userAccountTypes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserAccountTypes', 'action' => 'view', $userAccountTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAccountTypes', 'action' => 'edit', $userAccountTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAccountTypes', 'action' => 'delete', $userAccountTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountTypes->id)]) ?>
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

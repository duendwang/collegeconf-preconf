<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAccountType $userAccountType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Account Type'), ['action' => 'edit', $userAccountType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Account Type'), ['action' => 'delete', $userAccountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Account Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userAccountTypes view content">
            <h3><?= h($userAccountType->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userAccountType->has('user') ? $this->Html->link($userAccountType->user->id, ['controller' => 'Users', 'action' => 'view', $userAccountType->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Account Type') ?></th>
                    <td><?= $userAccountType->has('account_type') ? $this->Html->link($userAccountType->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $userAccountType->account_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userAccountType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($userAccountType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($userAccountType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userAccountType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userAccountType->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

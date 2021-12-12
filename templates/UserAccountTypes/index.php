<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAccountType[]|\Cake\Collection\CollectionInterface $userAccountTypes
 */
?>
<div class="userAccountTypes index content">
    <?= $this->Html->link(__('New User Account Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Account Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('account_type_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userAccountTypes as $userAccountType): ?>
                <tr>
                    <td><?= $this->Number->format($userAccountType->id) ?></td>
                    <td><?= $userAccountType->has('user') ? $this->Html->link($userAccountType->user->id, ['controller' => 'Users', 'action' => 'view', $userAccountType->user->id]) : '' ?></td>
                    <td><?= $userAccountType->has('account_type') ? $this->Html->link($userAccountType->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $userAccountType->account_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($userAccountType->creator) ?></td>
                    <td><?= h($userAccountType->created) ?></td>
                    <td><?= $this->Number->format($userAccountType->modifier) ?></td>
                    <td><?= h($userAccountType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userAccountType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAccountType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAccountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountType->id)]) ?>
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

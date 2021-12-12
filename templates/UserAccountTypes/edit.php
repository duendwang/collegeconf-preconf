<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAccountType $userAccountType
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $accountTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAccountType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userAccountTypes form content">
            <?= $this->Form->create($userAccountType) ?>
            <fieldset>
                <legend><?= __('Edit User Account Type') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('account_type_id', ['options' => $accountTypes]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

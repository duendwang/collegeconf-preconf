<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FinanceType $financeType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $financeType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $financeType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finance Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="financeTypes form content">
            <?= $this->Form->create($financeType) ?>
            <fieldset>
                <legend><?= __('Edit Finance Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

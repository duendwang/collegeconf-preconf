<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RateType $rateType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rateType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rateType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rate Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rateTypes form content">
            <?= $this->Form->create($rateType) ?>
            <fieldset>
                <legend><?= __('Edit Rate Type') ?></legend>
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

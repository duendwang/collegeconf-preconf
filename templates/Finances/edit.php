<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finance $finance
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 * @var string[]|\Cake\Collection\CollectionInterface $financeTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $finance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $finance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finances form content">
            <?= $this->Form->create($finance) ?>
            <fieldset>
                <legend><?= __('Edit Finance') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('receive_date');
                    echo $this->Form->control('locality_id', ['options' => $localities]);
                    echo $this->Form->control('finance_type_id', ['options' => $financeTypes]);
                    echo $this->Form->control('count');
                    echo $this->Form->control('rate');
                    echo $this->Form->control('charge');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('balance');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

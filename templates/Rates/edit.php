<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rate $rate
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceLocations
 * @var string[]|\Cake\Collection\CollectionInterface $rateTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rates form content">
            <?= $this->Form->create($rate) ?>
            <fieldset>
                <legend><?= __('Edit Rate') ?></legend>
                <?php
                    echo $this->Form->control('conference_location_id', ['options' => $conferenceLocations]);
                    echo $this->Form->control('rate_type_id', ['options' => $rateTypes]);
                    echo $this->Form->control('cost');
                    echo $this->Form->control('latefee_applies');
                    echo $this->Form->control('active');
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

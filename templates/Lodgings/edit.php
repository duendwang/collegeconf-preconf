<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lodging $lodging
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lodging->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lodging->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lodgings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lodgings form content">
            <?= $this->Form->create($lodging) ?>
            <fieldset>
                <legend><?= __('Edit Lodging') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('locality_id', ['options' => $localities, 'empty' => true]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('home_phone');
                    echo $this->Form->control('cell_phone');
                    echo $this->Form->control('pet');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('capacity');
                    echo $this->Form->control('attendee_count');
                    echo $this->Form->control('room');
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

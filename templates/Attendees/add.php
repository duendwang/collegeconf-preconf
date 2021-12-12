<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee $attendee
 * @var \Cake\Collection\CollectionInterface|string[] $localities
 * @var \Cake\Collection\CollectionInterface|string[] $campuses
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendees form content">
            <?= $this->Form->create($attendee) ?>
            <fieldset>
                <legend><?= __('Add Attendee') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('locality_id', ['options' => $localities]);
                    echo $this->Form->control('campus_id', ['options' => $campuses, 'empty' => true]);
                    echo $this->Form->control('new_one');
                    echo $this->Form->control('allergies');
                    echo $this->Form->control('status_id', ['options' => $statuses, 'empty' => true]);
                    echo $this->Form->control('cell_phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('city_state');
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

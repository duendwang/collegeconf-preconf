<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee $attendee
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 * @var string[]|\Cake\Collection\CollectionInterface $campuses
 * @var string[]|\Cake\Collection\CollectionInterface $statuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attendee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendees form content">
            <?= $this->Form->create($attendee) ?>
            <fieldset>
                <legend><?= __('Edit Attendee') ?></legend>
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

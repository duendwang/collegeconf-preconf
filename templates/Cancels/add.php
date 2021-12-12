<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cancel $cancel
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceAttendees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cancels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cancels form content">
            <?= $this->Form->create($cancel) ?>
            <fieldset>
                <legend><?= __('Add Cancel') ?></legend>
                <?php
                    echo $this->Form->control('conference_attendee_id', ['options' => $conferenceAttendees]);
                    echo $this->Form->control('reason');
                    echo $this->Form->control('replaced');
                    echo $this->Form->control('excused');
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadline $conferenceDeadline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conference Deadlines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlines form content">
            <?= $this->Form->create($conferenceDeadline) ?>
            <fieldset>
                <legend><?= __('Add Conference Deadline') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('weeks_before');
                    echo $this->Form->control('weekday');
                    echo $this->Form->control('time', ['empty' => true]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

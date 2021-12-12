<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
 * @var \Cake\Collection\CollectionInterface|string[] $conferences
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceDeadlines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conference Deadline Exceptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlineExceptions form content">
            <?= $this->Form->create($conferenceDeadlineException) ?>
            <fieldset>
                <legend><?= __('Add Conference Deadline Exception') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('conference_deadline_id', ['options' => $conferenceDeadlines]);
                    echo $this->Form->control('date');
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

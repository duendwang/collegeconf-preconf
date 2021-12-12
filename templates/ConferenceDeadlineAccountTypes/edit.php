<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceDeadlines
 * @var string[]|\Cake\Collection\CollectionInterface $accountTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceDeadlineAccountType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineAccountType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Deadline Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceDeadlineAccountTypes form content">
            <?= $this->Form->create($conferenceDeadlineAccountType) ?>
            <fieldset>
                <legend><?= __('Edit Conference Deadline Account Type') ?></legend>
                <?php
                    echo $this->Form->control('conference_deadline_id', ['options' => $conferenceDeadlines]);
                    echo $this->Form->control('account_type_id', ['options' => $accountTypes]);
                    echo $this->Form->control('notes');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

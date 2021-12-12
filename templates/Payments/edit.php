<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceAttendees
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $payment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments form content">
            <?= $this->Form->create($payment) ?>
            <fieldset>
                <legend><?= __('Edit Payment') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('conference_attendee_id', ['options' => $conferenceAttendees, 'empty' => true]);
                    echo $this->Form->control('locality_id', ['options' => $localities]);
                    echo $this->Form->control('cash');
                    echo $this->Form->control('check_number');
                    echo $this->Form->control('check');
                    echo $this->Form->control('credit_card');
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

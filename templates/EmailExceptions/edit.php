<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailException $emailException
 * @var string[]|\Cake\Collection\CollectionInterface $emails
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emailException->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emailException->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Email Exceptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailExceptions form content">
            <?= $this->Form->create($emailException) ?>
            <fieldset>
                <legend><?= __('Edit Email Exception') ?></legend>
                <?php
                    echo $this->Form->control('email_id', ['options' => $emails]);
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('subject');
                    echo $this->Form->control('body');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

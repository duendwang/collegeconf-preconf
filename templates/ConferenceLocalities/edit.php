<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocality $conferenceLocality
 * @var string[]|\Cake\Collection\CollectionInterface $conferences
 * @var string[]|\Cake\Collection\CollectionInterface $localities
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceLocality->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocality->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocalities form content">
            <?= $this->Form->create($conferenceLocality) ?>
            <fieldset>
                <legend><?= __('Edit Conference Locality') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('locality_id', ['options' => $localities]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('registering');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceLocations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferences form content">
            <?= $this->Form->create($conference) ?>
            <fieldset>
                <legend><?= __('Add Conference') ?></legend>
                <?php
                    echo $this->Form->control('term');
                    echo $this->Form->control('year');
                    echo $this->Form->control('part');
                    echo $this->Form->control('conference_location_id', ['options' => $conferenceLocations, 'empty' => true]);
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('last_barcode_id');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LodgingFacility $lodgingFacility
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceLocations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lodging Facilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lodgingFacilities form content">
            <?= $this->Form->create($lodgingFacility) ?>
            <fieldset>
                <legend><?= __('Add Lodging Facility') ?></legend>
                <?php
                    echo $this->Form->control('conference_location_id', ['options' => $conferenceLocations]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('location');
                    echo $this->Form->control('room');
                    echo $this->Form->control('accomodations');
                    echo $this->Form->control('capacity');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('comments');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

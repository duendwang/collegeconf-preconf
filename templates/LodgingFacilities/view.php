<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LodgingFacility $lodgingFacility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lodging Facility'), ['action' => 'edit', $lodgingFacility->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lodging Facility'), ['action' => 'delete', $lodgingFacility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodgingFacility->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lodging Facilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lodging Facility'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lodgingFacilities view content">
            <h3><?= h($lodgingFacility->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Location') ?></th>
                    <td><?= $lodgingFacility->has('conference_location') ? $this->Html->link($lodgingFacility->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $lodgingFacility->conference_location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($lodgingFacility->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($lodgingFacility->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= h($lodgingFacility->room) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accomodations') ?></th>
                    <td><?= h($lodgingFacility->accomodations) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($lodgingFacility->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($lodgingFacility->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($lodgingFacility->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($lodgingFacility->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comments') ?></th>
                    <td><?= h($lodgingFacility->comments) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lodgingFacility->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capacity') ?></th>
                    <td><?= $this->Number->format($lodgingFacility->capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($lodgingFacility->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($lodgingFacility->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lodgingFacility->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lodgingFacility->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Locality Registration Step'), ['action' => 'edit', $conferenceLocalityRegistrationStep->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Locality Registration Step'), ['action' => 'delete', $conferenceLocalityRegistrationStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocalityRegistrationStep->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Locality Registration Steps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Locality Registration Step'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocalityRegistrationSteps view content">
            <h3><?= h($conferenceLocalityRegistrationStep->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Locality') ?></th>
                    <td><?= $conferenceLocalityRegistrationStep->has('conference_locality') ? $this->Html->link($conferenceLocalityRegistrationStep->conference_locality->id, ['controller' => 'ConferenceLocalities', 'action' => 'view', $conferenceLocalityRegistrationStep->conference_locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Step') ?></th>
                    <td><?= $conferenceLocalityRegistrationStep->has('registration_step') ? $this->Html->link($conferenceLocalityRegistrationStep->registration_step->name, ['controller' => 'RegistrationSteps', 'action' => 'view', $conferenceLocalityRegistrationStep->registration_step->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceLocalityRegistrationStep->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceLocalityRegistrationStep->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completed') ?></th>
                    <td><?= $conferenceLocalityRegistrationStep->completed ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($conferenceLocalityRegistrationStep->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PotentialAttendee $potentialAttendee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Potential Attendee'), ['action' => 'edit', $potentialAttendee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Potential Attendee'), ['action' => 'delete', $potentialAttendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $potentialAttendee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Potential Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Potential Attendee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="potentialAttendees view content">
            <h3><?= h($potentialAttendee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $potentialAttendee->has('conference') ? $this->Html->link($potentialAttendee->conference->id, ['controller' => 'Conferences', 'action' => 'view', $potentialAttendee->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($potentialAttendee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($potentialAttendee->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($potentialAttendee->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $potentialAttendee->has('locality') ? $this->Html->link($potentialAttendee->locality->name, ['controller' => 'Localities', 'action' => 'view', $potentialAttendee->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Campus') ?></th>
                    <td><?= $potentialAttendee->has('campus') ? $this->Html->link($potentialAttendee->campus->name, ['controller' => 'Campuses', 'action' => 'view', $potentialAttendee->campus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Allergies') ?></th>
                    <td><?= h($potentialAttendee->allergies) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $potentialAttendee->has('status') ? $this->Html->link($potentialAttendee->status->name, ['controller' => 'Statuses', 'action' => 'view', $potentialAttendee->status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($potentialAttendee->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($potentialAttendee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($potentialAttendee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($potentialAttendee->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($potentialAttendee->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lodging $lodging
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lodging'), ['action' => 'edit', $lodging->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lodging'), ['action' => 'delete', $lodging->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodging->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lodgings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lodging'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lodgings view content">
            <h3><?= h($lodging->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $lodging->has('conference') ? $this->Html->link($lodging->conference->id, ['controller' => 'Conferences', 'action' => 'view', $lodging->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $lodging->has('locality') ? $this->Html->link($lodging->locality->name, ['controller' => 'Localities', 'action' => 'view', $lodging->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($lodging->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($lodging->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($lodging->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($lodging->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($lodging->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Phone') ?></th>
                    <td><?= h($lodging->home_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($lodging->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pet') ?></th>
                    <td><?= h($lodging->pet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($lodging->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= h($lodging->room) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lodging->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capacity') ?></th>
                    <td><?= $this->Number->format($lodging->capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Attendee Count') ?></th>
                    <td><?= $this->Number->format($lodging->attendee_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($lodging->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($lodging->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lodging->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lodging->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lodging->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Attendees') ?></h4>
                <?php if (!empty($lodging->conference_attendees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Attendee Id') ?></th>
                            <th><?= __('Barcode Id') ?></th>
                            <th><?= __('Conf Contact') ?></th>
                            <th><?= __('Lodging Group') ?></th>
                            <th><?= __('Lodging Id') ?></th>
                            <th><?= __('Submitter') ?></th>
                            <th><?= __('Rate') ?></th>
                            <th><?= __('Amd Paid') ?></th>
                            <th><?= __('Check Num') ?></th>
                            <th><?= __('Paid Date') ?></th>
                            <th><?= __('Part Time') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lodging->conference_attendees as $conferenceAttendees) : ?>
                        <tr>
                            <td><?= h($conferenceAttendees->id) ?></td>
                            <td><?= h($conferenceAttendees->conference_id) ?></td>
                            <td><?= h($conferenceAttendees->attendee_id) ?></td>
                            <td><?= h($conferenceAttendees->barcode_id) ?></td>
                            <td><?= h($conferenceAttendees->conf_contact) ?></td>
                            <td><?= h($conferenceAttendees->lodging_group) ?></td>
                            <td><?= h($conferenceAttendees->lodging_id) ?></td>
                            <td><?= h($conferenceAttendees->submitter) ?></td>
                            <td><?= h($conferenceAttendees->rate) ?></td>
                            <td><?= h($conferenceAttendees->amd_paid) ?></td>
                            <td><?= h($conferenceAttendees->check_num) ?></td>
                            <td><?= h($conferenceAttendees->paid_date) ?></td>
                            <td><?= h($conferenceAttendees->part_time) ?></td>
                            <td><?= h($conferenceAttendees->creator) ?></td>
                            <td><?= h($conferenceAttendees->created) ?></td>
                            <td><?= h($conferenceAttendees->modifier) ?></td>
                            <td><?= h($conferenceAttendees->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceAttendees', 'action' => 'view', $conferenceAttendees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceAttendees', 'action' => 'edit', $conferenceAttendees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceAttendees', 'action' => 'delete', $conferenceAttendees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

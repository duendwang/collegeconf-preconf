<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee $attendee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attendee'), ['action' => 'edit', $attendee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attendee'), ['action' => 'delete', $attendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attendee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendees view content">
            <h3><?= h($attendee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($attendee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($attendee->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($attendee->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $attendee->has('locality') ? $this->Html->link($attendee->locality->name, ['controller' => 'Localities', 'action' => 'view', $attendee->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Campus') ?></th>
                    <td><?= $attendee->has('campus') ? $this->Html->link($attendee->campus->name, ['controller' => 'Campuses', 'action' => 'view', $attendee->campus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Allergies') ?></th>
                    <td><?= h($attendee->allergies) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $attendee->has('status') ? $this->Html->link($attendee->status->name, ['controller' => 'Statuses', 'action' => 'view', $attendee->status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($attendee->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($attendee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('City State') ?></th>
                    <td><?= h($attendee->city_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attendee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($attendee->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($attendee->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attendee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attendee->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('New One') ?></th>
                    <td><?= $attendee->new_one ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($attendee->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Attendees') ?></h4>
                <?php if (!empty($attendee->conference_attendees)) : ?>
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
                        <?php foreach ($attendee->conference_attendees as $conferenceAttendees) : ?>
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
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($attendee->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Attendee Id') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Last Login') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($attendee->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->attendee_id) ?></td>
                            <td><?= h($users->cell_phone) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->locality_id) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->last_login) ?></td>
                            <td><?= h($users->creator) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modifier) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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

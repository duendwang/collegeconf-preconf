<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locality $locality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Locality'), ['action' => 'edit', $locality->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Locality'), ['action' => 'delete', $locality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locality->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Locality'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="localities view content">
            <h3><?= h($locality->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($locality->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferred Conference') ?></th>
                    <td><?= h($locality->preferred_conference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($locality->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($locality->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($locality->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($locality->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($locality->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($locality->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Attendees') ?></h4>
                <?php if (!empty($locality->attendees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Campus Id') ?></th>
                            <th><?= __('New One') ?></th>
                            <th><?= __('Allergies') ?></th>
                            <th><?= __('Status Id') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('City State') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->attendees as $attendees) : ?>
                        <tr>
                            <td><?= h($attendees->id) ?></td>
                            <td><?= h($attendees->first_name) ?></td>
                            <td><?= h($attendees->last_name) ?></td>
                            <td><?= h($attendees->gender) ?></td>
                            <td><?= h($attendees->locality_id) ?></td>
                            <td><?= h($attendees->campus_id) ?></td>
                            <td><?= h($attendees->new_one) ?></td>
                            <td><?= h($attendees->allergies) ?></td>
                            <td><?= h($attendees->status_id) ?></td>
                            <td><?= h($attendees->cell_phone) ?></td>
                            <td><?= h($attendees->email) ?></td>
                            <td><?= h($attendees->city_state) ?></td>
                            <td><?= h($attendees->comment) ?></td>
                            <td><?= h($attendees->creator) ?></td>
                            <td><?= h($attendees->created) ?></td>
                            <td><?= h($attendees->modifier) ?></td>
                            <td><?= h($attendees->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Attendees', 'action' => 'view', $attendees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Attendees', 'action' => 'edit', $attendees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendees', 'action' => 'delete', $attendees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Localities') ?></h4>
                <?php if (!empty($locality->conference_localities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Registering') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->conference_localities as $conferenceLocalities) : ?>
                        <tr>
                            <td><?= h($conferenceLocalities->id) ?></td>
                            <td><?= h($conferenceLocalities->conference_id) ?></td>
                            <td><?= h($conferenceLocalities->locality_id) ?></td>
                            <td><?= h($conferenceLocalities->user_id) ?></td>
                            <td><?= h($conferenceLocalities->registering) ?></td>
                            <td><?= h($conferenceLocalities->creator) ?></td>
                            <td><?= h($conferenceLocalities->created) ?></td>
                            <td><?= h($conferenceLocalities->modifier) ?></td>
                            <td><?= h($conferenceLocalities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceLocalities', 'action' => 'view', $conferenceLocalities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceLocalities', 'action' => 'edit', $conferenceLocalities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceLocalities', 'action' => 'delete', $conferenceLocalities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocalities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Finances') ?></h4>
                <?php if (!empty($locality->finances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Receive Date') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Finance Type Id') ?></th>
                            <th><?= __('Count') ?></th>
                            <th><?= __('Rate') ?></th>
                            <th><?= __('Charge') ?></th>
                            <th><?= __('Payment') ?></th>
                            <th><?= __('Balance') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->finances as $finances) : ?>
                        <tr>
                            <td><?= h($finances->id) ?></td>
                            <td><?= h($finances->conference_id) ?></td>
                            <td><?= h($finances->receive_date) ?></td>
                            <td><?= h($finances->locality_id) ?></td>
                            <td><?= h($finances->finance_type_id) ?></td>
                            <td><?= h($finances->count) ?></td>
                            <td><?= h($finances->rate) ?></td>
                            <td><?= h($finances->charge) ?></td>
                            <td><?= h($finances->payment) ?></td>
                            <td><?= h($finances->balance) ?></td>
                            <td><?= h($finances->comment) ?></td>
                            <td><?= h($finances->creator) ?></td>
                            <td><?= h($finances->created) ?></td>
                            <td><?= h($finances->modifier) ?></td>
                            <td><?= h($finances->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Finances', 'action' => 'view', $finances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Finances', 'action' => 'edit', $finances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Finances', 'action' => 'delete', $finances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Lodgings') ?></h4>
                <?php if (!empty($locality->lodgings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Zip') ?></th>
                            <th><?= __('Home Phone') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Pet') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Capacity') ?></th>
                            <th><?= __('Attendee Count') ?></th>
                            <th><?= __('Room') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->lodgings as $lodgings) : ?>
                        <tr>
                            <td><?= h($lodgings->id) ?></td>
                            <td><?= h($lodgings->conference_id) ?></td>
                            <td><?= h($lodgings->locality_id) ?></td>
                            <td><?= h($lodgings->code) ?></td>
                            <td><?= h($lodgings->name) ?></td>
                            <td><?= h($lodgings->address) ?></td>
                            <td><?= h($lodgings->city) ?></td>
                            <td><?= h($lodgings->zip) ?></td>
                            <td><?= h($lodgings->home_phone) ?></td>
                            <td><?= h($lodgings->cell_phone) ?></td>
                            <td><?= h($lodgings->pet) ?></td>
                            <td><?= h($lodgings->gender) ?></td>
                            <td><?= h($lodgings->capacity) ?></td>
                            <td><?= h($lodgings->attendee_count) ?></td>
                            <td><?= h($lodgings->room) ?></td>
                            <td><?= h($lodgings->comment) ?></td>
                            <td><?= h($lodgings->creator) ?></td>
                            <td><?= h($lodgings->created) ?></td>
                            <td><?= h($lodgings->modifier) ?></td>
                            <td><?= h($lodgings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lodgings', 'action' => 'view', $lodgings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lodgings', 'action' => 'edit', $lodgings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lodgings', 'action' => 'delete', $lodgings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodgings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Lrcs') ?></h4>
                <?php if (!empty($locality->lrcs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->lrcs as $lrcs) : ?>
                        <tr>
                            <td><?= h($lrcs->id) ?></td>
                            <td><?= h($lrcs->last_name) ?></td>
                            <td><?= h($lrcs->first_name) ?></td>
                            <td><?= h($lrcs->locality_id) ?></td>
                            <td><?= h($lrcs->gender) ?></td>
                            <td><?= h($lrcs->cell_phone) ?></td>
                            <td><?= h($lrcs->email) ?></td>
                            <td><?= h($lrcs->comment) ?></td>
                            <td><?= h($lrcs->active) ?></td>
                            <td><?= h($lrcs->creator) ?></td>
                            <td><?= h($lrcs->created) ?></td>
                            <td><?= h($lrcs->modifier) ?></td>
                            <td><?= h($lrcs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lrcs', 'action' => 'view', $lrcs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lrcs', 'action' => 'edit', $lrcs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lrcs', 'action' => 'delete', $lrcs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lrcs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Payments') ?></h4>
                <?php if (!empty($locality->payments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Conference Attendee Id') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Cash') ?></th>
                            <th><?= __('Check Number') ?></th>
                            <th><?= __('Check') ?></th>
                            <th><?= __('Credit Card') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->payments as $payments) : ?>
                        <tr>
                            <td><?= h($payments->id) ?></td>
                            <td><?= h($payments->date) ?></td>
                            <td><?= h($payments->conference_id) ?></td>
                            <td><?= h($payments->conference_attendee_id) ?></td>
                            <td><?= h($payments->locality_id) ?></td>
                            <td><?= h($payments->cash) ?></td>
                            <td><?= h($payments->check_number) ?></td>
                            <td><?= h($payments->check) ?></td>
                            <td><?= h($payments->credit_card) ?></td>
                            <td><?= h($payments->comment) ?></td>
                            <td><?= h($payments->creator) ?></td>
                            <td><?= h($payments->created) ?></td>
                            <td><?= h($payments->modifier) ?></td>
                            <td><?= h($payments->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Potential Attendees') ?></h4>
                <?php if (!empty($locality->potential_attendees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('Campus Id') ?></th>
                            <th><?= __('Allergies') ?></th>
                            <th><?= __('Status Id') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($locality->potential_attendees as $potentialAttendees) : ?>
                        <tr>
                            <td><?= h($potentialAttendees->id) ?></td>
                            <td><?= h($potentialAttendees->conference_id) ?></td>
                            <td><?= h($potentialAttendees->first_name) ?></td>
                            <td><?= h($potentialAttendees->last_name) ?></td>
                            <td><?= h($potentialAttendees->gender) ?></td>
                            <td><?= h($potentialAttendees->locality_id) ?></td>
                            <td><?= h($potentialAttendees->campus_id) ?></td>
                            <td><?= h($potentialAttendees->allergies) ?></td>
                            <td><?= h($potentialAttendees->status_id) ?></td>
                            <td><?= h($potentialAttendees->cell_phone) ?></td>
                            <td><?= h($potentialAttendees->email) ?></td>
                            <td><?= h($potentialAttendees->comment) ?></td>
                            <td><?= h($potentialAttendees->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PotentialAttendees', 'action' => 'view', $potentialAttendees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PotentialAttendees', 'action' => 'edit', $potentialAttendees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PotentialAttendees', 'action' => 'delete', $potentialAttendees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $potentialAttendees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($locality->users)) : ?>
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
                        <?php foreach ($locality->users as $users) : ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference'), ['action' => 'edit', $conference->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferences view content">
            <h3><?= h($conference->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Term') ?></th>
                    <td><?= h($conference->term) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($conference->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Part') ?></th>
                    <td><?= h($conference->part) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Location') ?></th>
                    <td><?= $conference->has('conference_location') ? $this->Html->link($conference->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $conference->conference_location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($conference->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conference->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Barcode Id') ?></th>
                    <td><?= $this->Number->format($conference->last_barcode_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conference->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conference->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($conference->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conference->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conference->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conference Attendees') ?></h4>
                <?php if (!empty($conference->conference_attendees)) : ?>
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
                        <?php foreach ($conference->conference_attendees as $conferenceAttendees) : ?>
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
                <h4><?= __('Related Conference Deadline Exceptions') ?></h4>
                <?php if (!empty($conference->conference_deadline_exceptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Conference Deadline Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Time') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conference->conference_deadline_exceptions as $conferenceDeadlineExceptions) : ?>
                        <tr>
                            <td><?= h($conferenceDeadlineExceptions->id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->conference_id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->conference_deadline_id) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->date) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->time) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->creator) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->created) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->modifier) ?></td>
                            <td><?= h($conferenceDeadlineExceptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'view', $conferenceDeadlineExceptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'edit', $conferenceDeadlineExceptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceDeadlineExceptions', 'action' => 'delete', $conferenceDeadlineExceptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceDeadlineExceptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Events') ?></h4>
                <?php if (!empty($conference->conference_events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conference->conference_events as $conferenceEvents) : ?>
                        <tr>
                            <td><?= h($conferenceEvents->id) ?></td>
                            <td><?= h($conferenceEvents->conference_id) ?></td>
                            <td><?= h($conferenceEvents->event_id) ?></td>
                            <td><?= h($conferenceEvents->notes) ?></td>
                            <td><?= h($conferenceEvents->creator) ?></td>
                            <td><?= h($conferenceEvents->created) ?></td>
                            <td><?= h($conferenceEvents->modifier) ?></td>
                            <td><?= h($conferenceEvents->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceEvents', 'action' => 'view', $conferenceEvents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceEvents', 'action' => 'edit', $conferenceEvents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceEvents', 'action' => 'delete', $conferenceEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceEvents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Localities') ?></h4>
                <?php if (!empty($conference->conference_localities)) : ?>
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
                        <?php foreach ($conference->conference_localities as $conferenceLocalities) : ?>
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
                <h4><?= __('Related Email Exceptions') ?></h4>
                <?php if (!empty($conference->email_exceptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conference->email_exceptions as $emailExceptions) : ?>
                        <tr>
                            <td><?= h($emailExceptions->id) ?></td>
                            <td><?= h($emailExceptions->email_id) ?></td>
                            <td><?= h($emailExceptions->conference_id) ?></td>
                            <td><?= h($emailExceptions->subject) ?></td>
                            <td><?= h($emailExceptions->body) ?></td>
                            <td><?= h($emailExceptions->creator) ?></td>
                            <td><?= h($emailExceptions->created) ?></td>
                            <td><?= h($emailExceptions->modifier) ?></td>
                            <td><?= h($emailExceptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmailExceptions', 'action' => 'view', $emailExceptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmailExceptions', 'action' => 'edit', $emailExceptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailExceptions', 'action' => 'delete', $emailExceptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailExceptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Finances') ?></h4>
                <?php if (!empty($conference->finances)) : ?>
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
                        <?php foreach ($conference->finances as $finances) : ?>
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
                <?php if (!empty($conference->lodgings)) : ?>
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
                        <?php foreach ($conference->lodgings as $lodgings) : ?>
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
                <h4><?= __('Related Payments') ?></h4>
                <?php if (!empty($conference->payments)) : ?>
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
                        <?php foreach ($conference->payments as $payments) : ?>
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
                <?php if (!empty($conference->potential_attendees)) : ?>
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
                        <?php foreach ($conference->potential_attendees as $potentialAttendees) : ?>
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
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceAttendee $conferenceAttendee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Attendee'), ['action' => 'edit', $conferenceAttendee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Attendee'), ['action' => 'delete', $conferenceAttendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Attendees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Attendee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceAttendees view content">
            <h3><?= h($conferenceAttendee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $conferenceAttendee->has('conference') ? $this->Html->link($conferenceAttendee->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceAttendee->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Attendee') ?></th>
                    <td><?= $conferenceAttendee->has('attendee') ? $this->Html->link($conferenceAttendee->attendee->id, ['controller' => 'Attendees', 'action' => 'view', $conferenceAttendee->attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lodging Group') ?></th>
                    <td><?= h($conferenceAttendee->lodging_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lodging') ?></th>
                    <td><?= $conferenceAttendee->has('lodging') ? $this->Html->link($conferenceAttendee->lodging->name, ['controller' => 'Lodgings', 'action' => 'view', $conferenceAttendee->lodging->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitter') ?></th>
                    <td><?= h($conferenceAttendee->submitter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check Num') ?></th>
                    <td><?= h($conferenceAttendee->check_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Barcode Id') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->barcode_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rate') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->rate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amd Paid') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->amd_paid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceAttendee->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paid Date') ?></th>
                    <td><?= h($conferenceAttendee->paid_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceAttendee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceAttendee->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conf Contact') ?></th>
                    <td><?= $conferenceAttendee->conf_contact ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Part Time') ?></th>
                    <td><?= $conferenceAttendee->part_time ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cancels') ?></h4>
                <?php if (!empty($conferenceAttendee->cancels)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Attendee Id') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Replaced') ?></th>
                            <th><?= __('Excused') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceAttendee->cancels as $cancels) : ?>
                        <tr>
                            <td><?= h($cancels->id) ?></td>
                            <td><?= h($cancels->conference_attendee_id) ?></td>
                            <td><?= h($cancels->reason) ?></td>
                            <td><?= h($cancels->replaced) ?></td>
                            <td><?= h($cancels->excused) ?></td>
                            <td><?= h($cancels->comment) ?></td>
                            <td><?= h($cancels->creator) ?></td>
                            <td><?= h($cancels->created) ?></td>
                            <td><?= h($cancels->modifier) ?></td>
                            <td><?= h($cancels->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cancels', 'action' => 'view', $cancels->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cancels', 'action' => 'edit', $cancels->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cancels', 'action' => 'delete', $cancels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancels->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Check Ins') ?></h4>
                <?php if (!empty($conferenceAttendee->check_ins)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Attendee Id') ?></th>
                            <th><?= __('Timestamp') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceAttendee->check_ins as $checkIns) : ?>
                        <tr>
                            <td><?= h($checkIns->id) ?></td>
                            <td><?= h($checkIns->conference_attendee_id) ?></td>
                            <td><?= h($checkIns->timestamp) ?></td>
                            <td><?= h($checkIns->creator) ?></td>
                            <td><?= h($checkIns->created) ?></td>
                            <td><?= h($checkIns->modifier) ?></td>
                            <td><?= h($checkIns->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CheckIns', 'action' => 'view', $checkIns->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CheckIns', 'action' => 'edit', $checkIns->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CheckIns', 'action' => 'delete', $checkIns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkIns->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Attendee Conference Events') ?></h4>
                <?php if (!empty($conferenceAttendee->conference_attendee_conference_events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Attendee Id') ?></th>
                            <th><?= __('Conference Event Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceAttendee->conference_attendee_conference_events as $conferenceAttendeeConferenceEvents) : ?>
                        <tr>
                            <td><?= h($conferenceAttendeeConferenceEvents->id) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->conference_attendee_id) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->conference_event_id) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->creator) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->created) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->modifier) ?></td>
                            <td><?= h($conferenceAttendeeConferenceEvents->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceAttendeeConferenceEvents', 'action' => 'view', $conferenceAttendeeConferenceEvents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceAttendeeConferenceEvents', 'action' => 'edit', $conferenceAttendeeConferenceEvents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceAttendeeConferenceEvents', 'action' => 'delete', $conferenceAttendeeConferenceEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeConferenceEvents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Onsite Registrations') ?></h4>
                <?php if (!empty($conferenceAttendee->onsite_registrations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Attendee Id') ?></th>
                            <th><?= __('Registration') ?></th>
                            <th><?= __('Cashier') ?></th>
                            <th><?= __('Hospitality') ?></th>
                            <th><?= __('Badge') ?></th>
                            <th><?= __('Need Cashier') ?></th>
                            <th><?= __('Need Hospitality') ?></th>
                            <th><?= __('Need Badge') ?></th>
                            <th><?= __('Need Old') ?></th>
                            <th><?= __('Old First') ?></th>
                            <th><?= __('Old Last') ?></th>
                            <th><?= __('Old Locality Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceAttendee->onsite_registrations as $onsiteRegistrations) : ?>
                        <tr>
                            <td><?= h($onsiteRegistrations->id) ?></td>
                            <td><?= h($onsiteRegistrations->conference_attendee_id) ?></td>
                            <td><?= h($onsiteRegistrations->registration) ?></td>
                            <td><?= h($onsiteRegistrations->cashier) ?></td>
                            <td><?= h($onsiteRegistrations->hospitality) ?></td>
                            <td><?= h($onsiteRegistrations->badge) ?></td>
                            <td><?= h($onsiteRegistrations->need_cashier) ?></td>
                            <td><?= h($onsiteRegistrations->need_hospitality) ?></td>
                            <td><?= h($onsiteRegistrations->need_badge) ?></td>
                            <td><?= h($onsiteRegistrations->need_old) ?></td>
                            <td><?= h($onsiteRegistrations->old_first) ?></td>
                            <td><?= h($onsiteRegistrations->old_last) ?></td>
                            <td><?= h($onsiteRegistrations->old_locality_id) ?></td>
                            <td><?= h($onsiteRegistrations->creator) ?></td>
                            <td><?= h($onsiteRegistrations->created) ?></td>
                            <td><?= h($onsiteRegistrations->modifier) ?></td>
                            <td><?= h($onsiteRegistrations->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OnsiteRegistrations', 'action' => 'view', $onsiteRegistrations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OnsiteRegistrations', 'action' => 'edit', $onsiteRegistrations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OnsiteRegistrations', 'action' => 'delete', $onsiteRegistrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $onsiteRegistrations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Payments') ?></h4>
                <?php if (!empty($conferenceAttendee->payments)) : ?>
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
                        <?php foreach ($conferenceAttendee->payments as $payments) : ?>
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
        </div>
    </div>
</div>

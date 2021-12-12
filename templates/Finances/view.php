<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finance $finance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finance'), ['action' => 'edit', $finance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finance'), ['action' => 'delete', $finance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finances view content">
            <h3><?= h($finance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $finance->has('conference') ? $this->Html->link($finance->conference->id, ['controller' => 'Conferences', 'action' => 'view', $finance->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $finance->has('locality') ? $this->Html->link($finance->locality->name, ['controller' => 'Localities', 'action' => 'view', $finance->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Finance Type') ?></th>
                    <td><?= $finance->has('finance_type') ? $this->Html->link($finance->finance_type->name, ['controller' => 'FinanceTypes', 'action' => 'view', $finance->finance_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Count') ?></th>
                    <td><?= $this->Number->format($finance->count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rate') ?></th>
                    <td><?= $this->Number->format($finance->rate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charge') ?></th>
                    <td><?= $this->Number->format($finance->charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $this->Number->format($finance->payment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Balance') ?></th>
                    <td><?= $this->Number->format($finance->balance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($finance->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($finance->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receive Date') ?></th>
                    <td><?= h($finance->receive_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($finance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($finance->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($finance->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Attendee Finances') ?></h4>
                <?php if (!empty($finance->conference_attendee_finances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Finance Id') ?></th>
                            <th><?= __('Add Conference Attendee Id') ?></th>
                            <th><?= __('Cancel Conference Attendee Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($finance->conference_attendee_finances as $conferenceAttendeeFinances) : ?>
                        <tr>
                            <td><?= h($conferenceAttendeeFinances->id) ?></td>
                            <td><?= h($conferenceAttendeeFinances->finance_id) ?></td>
                            <td><?= h($conferenceAttendeeFinances->add_conference_attendee_id) ?></td>
                            <td><?= h($conferenceAttendeeFinances->cancel_conference_attendee_id) ?></td>
                            <td><?= h($conferenceAttendeeFinances->creator) ?></td>
                            <td><?= h($conferenceAttendeeFinances->created) ?></td>
                            <td><?= h($conferenceAttendeeFinances->modifier) ?></td>
                            <td><?= h($conferenceAttendeeFinances->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceAttendeeFinances', 'action' => 'view', $conferenceAttendeeFinances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceAttendeeFinances', 'action' => 'edit', $conferenceAttendeeFinances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceAttendeeFinances', 'action' => 'delete', $conferenceAttendeeFinances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceAttendeeFinances->id)]) ?>
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

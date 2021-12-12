<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceEvent $conferenceEvent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Event'), ['action' => 'edit', $conferenceEvent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Event'), ['action' => 'delete', $conferenceEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceEvent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceEvents view content">
            <h3><?= h($conferenceEvent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $conferenceEvent->has('conference') ? $this->Html->link($conferenceEvent->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceEvent->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= $conferenceEvent->has('event') ? $this->Html->link($conferenceEvent->event->name, ['controller' => 'Events', 'action' => 'view', $conferenceEvent->event->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceEvent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceEvent->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceEvent->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceEvent->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceEvent->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($conferenceEvent->notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Attendee Conference Events') ?></h4>
                <?php if (!empty($conferenceEvent->conference_attendee_conference_events)) : ?>
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
                        <?php foreach ($conferenceEvent->conference_attendee_conference_events as $conferenceAttendeeConferenceEvents) : ?>
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
        </div>
    </div>
</div>

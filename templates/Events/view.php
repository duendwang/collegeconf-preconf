<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($event->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($event->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($event->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($event->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($event->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($event->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Events') ?></h4>
                <?php if (!empty($event->conference_events)) : ?>
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
                        <?php foreach ($event->conference_events as $conferenceEvents) : ?>
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
        </div>
    </div>
</div>

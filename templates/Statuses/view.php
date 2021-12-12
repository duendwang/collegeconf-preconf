<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statuses view content">
            <h3><?= h($status->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($status->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($status->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($status->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($status->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($status->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($status->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($status->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Attendees') ?></h4>
                <?php if (!empty($status->attendees)) : ?>
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
                        <?php foreach ($status->attendees as $attendees) : ?>
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
                <h4><?= __('Related Potential Attendees') ?></h4>
                <?php if (!empty($status->potential_attendees)) : ?>
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
                        <?php foreach ($status->potential_attendees as $potentialAttendees) : ?>
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

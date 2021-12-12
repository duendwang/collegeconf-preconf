<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocation $conferenceLocation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Location'), ['action' => 'edit', $conferenceLocation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Location'), ['action' => 'delete', $conferenceLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocations view content">
            <h3><?= h($conferenceLocation->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($conferenceLocation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceLocation->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conferences') ?></h4>
                <?php if (!empty($conferenceLocation->conferences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Term') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Part') ?></th>
                            <th><?= __('Conference Location Id') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Last Barcode Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceLocation->conferences as $conferences) : ?>
                        <tr>
                            <td><?= h($conferences->id) ?></td>
                            <td><?= h($conferences->term) ?></td>
                            <td><?= h($conferences->year) ?></td>
                            <td><?= h($conferences->part) ?></td>
                            <td><?= h($conferences->conference_location_id) ?></td>
                            <td><?= h($conferences->start_date) ?></td>
                            <td><?= h($conferences->code) ?></td>
                            <td><?= h($conferences->last_barcode_id) ?></td>
                            <td><?= h($conferences->creator) ?></td>
                            <td><?= h($conferences->created) ?></td>
                            <td><?= h($conferences->modifier) ?></td>
                            <td><?= h($conferences->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Conferences', 'action' => 'view', $conferences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Conferences', 'action' => 'edit', $conferences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Conferences', 'action' => 'delete', $conferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferences->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Lodging Facilities') ?></h4>
                <?php if (!empty($conferenceLocation->lodging_facilities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Location Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Room') ?></th>
                            <th><?= __('Accomodations') ?></th>
                            <th><?= __('Capacity') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Zip') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceLocation->lodging_facilities as $lodgingFacilities) : ?>
                        <tr>
                            <td><?= h($lodgingFacilities->id) ?></td>
                            <td><?= h($lodgingFacilities->conference_location_id) ?></td>
                            <td><?= h($lodgingFacilities->code) ?></td>
                            <td><?= h($lodgingFacilities->location) ?></td>
                            <td><?= h($lodgingFacilities->room) ?></td>
                            <td><?= h($lodgingFacilities->accomodations) ?></td>
                            <td><?= h($lodgingFacilities->capacity) ?></td>
                            <td><?= h($lodgingFacilities->address) ?></td>
                            <td><?= h($lodgingFacilities->city) ?></td>
                            <td><?= h($lodgingFacilities->zip) ?></td>
                            <td><?= h($lodgingFacilities->phone) ?></td>
                            <td><?= h($lodgingFacilities->comments) ?></td>
                            <td><?= h($lodgingFacilities->creator) ?></td>
                            <td><?= h($lodgingFacilities->created) ?></td>
                            <td><?= h($lodgingFacilities->modifier) ?></td>
                            <td><?= h($lodgingFacilities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LodgingFacilities', 'action' => 'view', $lodgingFacilities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LodgingFacilities', 'action' => 'edit', $lodgingFacilities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LodgingFacilities', 'action' => 'delete', $lodgingFacilities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lodgingFacilities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Rates') ?></h4>
                <?php if (!empty($conferenceLocation->rates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Location Id') ?></th>
                            <th><?= __('Rate Type Id') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Latefee Applies') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceLocation->rates as $rates) : ?>
                        <tr>
                            <td><?= h($rates->id) ?></td>
                            <td><?= h($rates->conference_location_id) ?></td>
                            <td><?= h($rates->rate_type_id) ?></td>
                            <td><?= h($rates->cost) ?></td>
                            <td><?= h($rates->latefee_applies) ?></td>
                            <td><?= h($rates->active) ?></td>
                            <td><?= h($rates->comment) ?></td>
                            <td><?= h($rates->creator) ?></td>
                            <td><?= h($rates->created) ?></td>
                            <td><?= h($rates->modifier) ?></td>
                            <td><?= h($rates->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Rates', 'action' => 'view', $rates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Rates', 'action' => 'edit', $rates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rates', 'action' => 'delete', $rates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rates->id)]) ?>
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

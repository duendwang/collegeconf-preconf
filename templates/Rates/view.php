<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rate $rate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rate'), ['action' => 'edit', $rate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rate'), ['action' => 'delete', $rate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rates view content">
            <h3><?= h($rate->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference Location') ?></th>
                    <td><?= $rate->has('conference_location') ? $this->Html->link($rate->conference_location->name, ['controller' => 'ConferenceLocations', 'action' => 'view', $rate->conference_location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rate Type') ?></th>
                    <td><?= $rate->has('rate_type') ? $this->Html->link($rate->rate_type->name, ['controller' => 'RateTypes', 'action' => 'view', $rate->rate_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($rate->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($rate->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($rate->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rate->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rate->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latefee Applies') ?></th>
                    <td><?= $rate->latefee_applies ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $rate->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rate->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

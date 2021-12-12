<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RateType $rateType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rate Type'), ['action' => 'edit', $rateType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rate Type'), ['action' => 'delete', $rateType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rate Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rate Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rateTypes view content">
            <h3><?= h($rateType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($rateType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rateType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($rateType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($rateType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rateType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rateType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rateType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Rates') ?></h4>
                <?php if (!empty($rateType->rates)) : ?>
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
                        <?php foreach ($rateType->rates as $rates) : ?>
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

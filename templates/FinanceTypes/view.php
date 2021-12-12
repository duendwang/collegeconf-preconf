<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FinanceType $financeType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finance Type'), ['action' => 'edit', $financeType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finance Type'), ['action' => 'delete', $financeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finance Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finance Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="financeTypes view content">
            <h3><?= h($financeType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($financeType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($financeType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($financeType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($financeType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($financeType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($financeType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($financeType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Finances') ?></h4>
                <?php if (!empty($financeType->finances)) : ?>
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
                        <?php foreach ($financeType->finances as $finances) : ?>
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
        </div>
    </div>
</div>

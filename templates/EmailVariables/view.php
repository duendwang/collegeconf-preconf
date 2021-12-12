<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailVariable $emailVariable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Email Variable'), ['action' => 'edit', $emailVariable->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Email Variable'), ['action' => 'delete', $emailVariable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailVariable->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Email Variables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Email Variable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailVariables view content">
            <h3><?= h($emailVariable->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($emailVariable->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= h($emailVariable->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($emailVariable->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($emailVariable->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($emailVariable->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($emailVariable->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($emailVariable->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($emailVariable->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

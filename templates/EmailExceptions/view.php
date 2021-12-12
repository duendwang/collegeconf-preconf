<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailException $emailException
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Email Exception'), ['action' => 'edit', $emailException->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Email Exception'), ['action' => 'delete', $emailException->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailException->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Email Exceptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Email Exception'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailExceptions view content">
            <h3><?= h($emailException->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $emailException->has('email') ? $this->Html->link($emailException->email->name, ['controller' => 'Emails', 'action' => 'view', $emailException->email->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $emailException->has('conference') ? $this->Html->link($emailException->conference->id, ['controller' => 'Conferences', 'action' => 'view', $emailException->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= h($emailException->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($emailException->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($emailException->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($emailException->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($emailException->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($emailException->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($emailException->body)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Email $email
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Emails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Email'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emails view content">
            <h3><?= h($email->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($email->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($email->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= h($email->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($email->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($email->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($email->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($email->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($email->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($email->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Email Exceptions') ?></h4>
                <?php if (!empty($email->email_exceptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($email->email_exceptions as $emailExceptions) : ?>
                        <tr>
                            <td><?= h($emailExceptions->id) ?></td>
                            <td><?= h($emailExceptions->email_id) ?></td>
                            <td><?= h($emailExceptions->conference_id) ?></td>
                            <td><?= h($emailExceptions->subject) ?></td>
                            <td><?= h($emailExceptions->body) ?></td>
                            <td><?= h($emailExceptions->creator) ?></td>
                            <td><?= h($emailExceptions->created) ?></td>
                            <td><?= h($emailExceptions->modifier) ?></td>
                            <td><?= h($emailExceptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmailExceptions', 'action' => 'view', $emailExceptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmailExceptions', 'action' => 'edit', $emailExceptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailExceptions', 'action' => 'delete', $emailExceptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailExceptions->id)]) ?>
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

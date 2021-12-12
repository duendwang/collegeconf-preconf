<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lrc $lrc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lrc'), ['action' => 'edit', $lrc->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lrc'), ['action' => 'delete', $lrc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lrc->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lrcs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lrc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lrcs view content">
            <h3><?= h($lrc->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($lrc->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($lrc->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $lrc->has('locality') ? $this->Html->link($lrc->locality->name, ['controller' => 'Localities', 'action' => 'view', $lrc->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($lrc->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($lrc->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($lrc->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lrc->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($lrc->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($lrc->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lrc->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lrc->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $lrc->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lrc->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

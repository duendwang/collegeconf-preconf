<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationStep[]|\Cake\Collection\CollectionInterface $registrationSteps
 */
?>
<div class="registrationSteps index content">
    <?= $this->Html->link(__('New Registration Step'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registration Steps') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrationSteps as $registrationStep): ?>
                <tr>
                    <td><?= $this->Number->format($registrationStep->id) ?></td>
                    <td><?= h($registrationStep->name) ?></td>
                    <td><?= $this->Number->format($registrationStep->creator) ?></td>
                    <td><?= h($registrationStep->created) ?></td>
                    <td><?= $this->Number->format($registrationStep->modifier) ?></td>
                    <td><?= h($registrationStep->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrationStep->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrationStep->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrationStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationStep->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

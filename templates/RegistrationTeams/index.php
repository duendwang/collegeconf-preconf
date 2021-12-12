<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeam[]|\Cake\Collection\CollectionInterface $registrationTeams
 */
?>
<div class="registrationTeams index content">
    <?= $this->Html->link(__('New Registration Team'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registration Teams') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrationTeams as $registrationTeam): ?>
                <tr>
                    <td><?= $this->Number->format($registrationTeam->id) ?></td>
                    <td><?= h($registrationTeam->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrationTeam->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrationTeam->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrationTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeam->id)]) ?>
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

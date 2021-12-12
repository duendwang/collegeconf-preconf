<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Collection\CollectionInterface $conferenceLocalityRegistrationSteps
 */
?>
<div class="conferenceLocalityRegistrationSteps index content">
    <?= $this->Html->link(__('New Conference Locality Registration Step'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Locality Registration Steps') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('conference_locality_id') ?></th>
                    <th><?= $this->Paginator->sort('registration_step_id') ?></th>
                    <th><?= $this->Paginator->sort('completed') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferenceLocalityRegistrationSteps as $conferenceLocalityRegistrationStep): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->id) ?></td>
                    <td><?= $conferenceLocalityRegistrationStep->has('conference_locality') ? $this->Html->link($conferenceLocalityRegistrationStep->conference_locality->id, ['controller' => 'ConferenceLocalities', 'action' => 'view', $conferenceLocalityRegistrationStep->conference_locality->id]) : '' ?></td>
                    <td><?= $conferenceLocalityRegistrationStep->has('registration_step') ? $this->Html->link($conferenceLocalityRegistrationStep->registration_step->name, ['controller' => 'RegistrationSteps', 'action' => 'view', $conferenceLocalityRegistrationStep->registration_step->id]) : '' ?></td>
                    <td><?= h($conferenceLocalityRegistrationStep->completed) ?></td>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->creator) ?></td>
                    <td><?= h($conferenceLocalityRegistrationStep->created) ?></td>
                    <td><?= $this->Number->format($conferenceLocalityRegistrationStep->modifier) ?></td>
                    <td><?= h($conferenceLocalityRegistrationStep->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceLocalityRegistrationStep->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceLocalityRegistrationStep->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceLocalityRegistrationStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocalityRegistrationStep->id)]) ?>
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

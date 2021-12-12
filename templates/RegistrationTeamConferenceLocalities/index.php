<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Collection\CollectionInterface $registrationTeamConferenceLocalities
 */
?>
<div class="registrationTeamConferenceLocalities index content">
    <?= $this->Html->link(__('New Registration Team Conference Locality'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registration Team Conference Localities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('registration_team_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_locality_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrationTeamConferenceLocalities as $registrationTeamConferenceLocality): ?>
                <tr>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->id) ?></td>
                    <td><?= $registrationTeamConferenceLocality->has('registration_team') ? $this->Html->link($registrationTeamConferenceLocality->registration_team->name, ['controller' => 'RegistrationTeams', 'action' => 'view', $registrationTeamConferenceLocality->registration_team->id]) : '' ?></td>
                    <td><?= $registrationTeamConferenceLocality->has('conference_locality') ? $this->Html->link($registrationTeamConferenceLocality->conference_locality->id, ['controller' => 'ConferenceLocalities', 'action' => 'view', $registrationTeamConferenceLocality->conference_locality->id]) : '' ?></td>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->creator) ?></td>
                    <td><?= h($registrationTeamConferenceLocality->created) ?></td>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->modifier) ?></td>
                    <td><?= h($registrationTeamConferenceLocality->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrationTeamConferenceLocality->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrationTeamConferenceLocality->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrationTeamConferenceLocality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamConferenceLocality->id)]) ?>
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

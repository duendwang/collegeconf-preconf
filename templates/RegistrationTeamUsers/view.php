<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration Team User'), ['action' => 'edit', $registrationTeamUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration Team User'), ['action' => 'delete', $registrationTeamUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registration Team Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration Team User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeamUsers view content">
            <h3><?= h($registrationTeamUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $registrationTeamUser->has('user') ? $this->Html->link($registrationTeamUser->user->id, ['controller' => 'Users', 'action' => 'view', $registrationTeamUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Team') ?></th>
                    <td><?= $registrationTeamUser->has('registration_team') ? $this->Html->link($registrationTeamUser->registration_team->name, ['controller' => 'RegistrationTeams', 'action' => 'view', $registrationTeamUser->registration_team->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrationTeamUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($registrationTeamUser->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($registrationTeamUser->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registrationTeamUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registrationTeamUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

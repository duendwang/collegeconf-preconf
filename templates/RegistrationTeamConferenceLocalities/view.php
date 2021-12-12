<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration Team Conference Locality'), ['action' => 'edit', $registrationTeamConferenceLocality->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration Team Conference Locality'), ['action' => 'delete', $registrationTeamConferenceLocality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamConferenceLocality->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registration Team Conference Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration Team Conference Locality'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeamConferenceLocalities view content">
            <h3><?= h($registrationTeamConferenceLocality->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Registration Team') ?></th>
                    <td><?= $registrationTeamConferenceLocality->has('registration_team') ? $this->Html->link($registrationTeamConferenceLocality->registration_team->name, ['controller' => 'RegistrationTeams', 'action' => 'view', $registrationTeamConferenceLocality->registration_team->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Locality') ?></th>
                    <td><?= $registrationTeamConferenceLocality->has('conference_locality') ? $this->Html->link($registrationTeamConferenceLocality->conference_locality->id, ['controller' => 'ConferenceLocalities', 'action' => 'view', $registrationTeamConferenceLocality->conference_locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($registrationTeamConferenceLocality->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registrationTeamConferenceLocality->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registrationTeamConferenceLocality->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

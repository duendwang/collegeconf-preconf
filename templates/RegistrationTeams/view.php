<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationTeam $registrationTeam
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration Team'), ['action' => 'edit', $registrationTeam->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration Team'), ['action' => 'delete', $registrationTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeam->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registration Teams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration Team'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeams view content">
            <h3><?= h($registrationTeam->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($registrationTeam->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrationTeam->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registrationTeam->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Registration Team Conference Localities') ?></h4>
                <?php if (!empty($registrationTeam->registration_team_conference_localities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Registration Team Id') ?></th>
                            <th><?= __('Conference Locality Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($registrationTeam->registration_team_conference_localities as $registrationTeamConferenceLocalities) : ?>
                        <tr>
                            <td><?= h($registrationTeamConferenceLocalities->id) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->registration_team_id) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->conference_locality_id) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->creator) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->created) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->modifier) ?></td>
                            <td><?= h($registrationTeamConferenceLocalities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RegistrationTeamConferenceLocalities', 'action' => 'view', $registrationTeamConferenceLocalities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RegistrationTeamConferenceLocalities', 'action' => 'edit', $registrationTeamConferenceLocalities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RegistrationTeamConferenceLocalities', 'action' => 'delete', $registrationTeamConferenceLocalities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamConferenceLocalities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Registration Team Users') ?></h4>
                <?php if (!empty($registrationTeam->registration_team_users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Registration Team Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($registrationTeam->registration_team_users as $registrationTeamUsers) : ?>
                        <tr>
                            <td><?= h($registrationTeamUsers->id) ?></td>
                            <td><?= h($registrationTeamUsers->user_id) ?></td>
                            <td><?= h($registrationTeamUsers->registration_team_id) ?></td>
                            <td><?= h($registrationTeamUsers->creator) ?></td>
                            <td><?= h($registrationTeamUsers->created) ?></td>
                            <td><?= h($registrationTeamUsers->modifier) ?></td>
                            <td><?= h($registrationTeamUsers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RegistrationTeamUsers', 'action' => 'view', $registrationTeamUsers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RegistrationTeamUsers', 'action' => 'edit', $registrationTeamUsers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RegistrationTeamUsers', 'action' => 'delete', $registrationTeamUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeamUsers->id)]) ?>
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

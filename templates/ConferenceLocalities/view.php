<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocality $conferenceLocality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Locality'), ['action' => 'edit', $conferenceLocality->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Locality'), ['action' => 'delete', $conferenceLocality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocality->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Locality'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocalities view content">
            <h3><?= h($conferenceLocality->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conference') ?></th>
                    <td><?= $conferenceLocality->has('conference') ? $this->Html->link($conferenceLocality->conference->id, ['controller' => 'Conferences', 'action' => 'view', $conferenceLocality->conference->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $conferenceLocality->has('locality') ? $this->Html->link($conferenceLocality->locality->name, ['controller' => 'Localities', 'action' => 'view', $conferenceLocality->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $conferenceLocality->has('user') ? $this->Html->link($conferenceLocality->user->id, ['controller' => 'Users', 'action' => 'view', $conferenceLocality->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceLocality->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($conferenceLocality->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($conferenceLocality->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conferenceLocality->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conferenceLocality->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registering') ?></th>
                    <td><?= $conferenceLocality->registering ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conference Locality Registration Steps') ?></h4>
                <?php if (!empty($conferenceLocality->conference_locality_registration_steps)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Locality Id') ?></th>
                            <th><?= __('Registration Step Id') ?></th>
                            <th><?= __('Completed') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceLocality->conference_locality_registration_steps as $conferenceLocalityRegistrationSteps) : ?>
                        <tr>
                            <td><?= h($conferenceLocalityRegistrationSteps->id) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->conference_locality_id) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->registration_step_id) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->completed) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->notes) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->creator) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->created) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->modifier) ?></td>
                            <td><?= h($conferenceLocalityRegistrationSteps->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceLocalityRegistrationSteps', 'action' => 'view', $conferenceLocalityRegistrationSteps->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceLocalityRegistrationSteps', 'action' => 'edit', $conferenceLocalityRegistrationSteps->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceLocalityRegistrationSteps', 'action' => 'delete', $conferenceLocalityRegistrationSteps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocalityRegistrationSteps->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Registration Team Conference Localities') ?></h4>
                <?php if (!empty($conferenceLocality->registration_team_conference_localities)) : ?>
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
                        <?php foreach ($conferenceLocality->registration_team_conference_localities as $registrationTeamConferenceLocalities) : ?>
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
        </div>
    </div>
</div>

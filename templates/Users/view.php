<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Attendee') ?></th>
                    <td><?= $user->has('attendee') ? $this->Html->link($user->attendee->id, ['controller' => 'Attendees', 'action' => 'view', $user->attendee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($user->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= $user->has('locality') ? $this->Html->link($user->locality->name, ['controller' => 'Localities', 'action' => 'view', $user->locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($user->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($user->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($user->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conference Localities') ?></h4>
                <?php if (!empty($user->conference_localities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Conference Id') ?></th>
                            <th><?= __('Locality Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Registering') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->conference_localities as $conferenceLocalities) : ?>
                        <tr>
                            <td><?= h($conferenceLocalities->id) ?></td>
                            <td><?= h($conferenceLocalities->conference_id) ?></td>
                            <td><?= h($conferenceLocalities->locality_id) ?></td>
                            <td><?= h($conferenceLocalities->user_id) ?></td>
                            <td><?= h($conferenceLocalities->registering) ?></td>
                            <td><?= h($conferenceLocalities->creator) ?></td>
                            <td><?= h($conferenceLocalities->created) ?></td>
                            <td><?= h($conferenceLocalities->modifier) ?></td>
                            <td><?= h($conferenceLocalities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConferenceLocalities', 'action' => 'view', $conferenceLocalities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConferenceLocalities', 'action' => 'edit', $conferenceLocalities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConferenceLocalities', 'action' => 'delete', $conferenceLocalities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocalities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Registration Team Users') ?></h4>
                <?php if (!empty($user->registration_team_users)) : ?>
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
                        <?php foreach ($user->registration_team_users as $registrationTeamUsers) : ?>
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
            <div class="related">
                <h4><?= __('Related User Account Types') ?></h4>
                <?php if (!empty($user->user_account_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_account_types as $userAccountTypes) : ?>
                        <tr>
                            <td><?= h($userAccountTypes->id) ?></td>
                            <td><?= h($userAccountTypes->user_id) ?></td>
                            <td><?= h($userAccountTypes->account_type_id) ?></td>
                            <td><?= h($userAccountTypes->creator) ?></td>
                            <td><?= h($userAccountTypes->created) ?></td>
                            <td><?= h($userAccountTypes->modifier) ?></td>
                            <td><?= h($userAccountTypes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserAccountTypes', 'action' => 'view', $userAccountTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAccountTypes', 'action' => 'edit', $userAccountTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAccountTypes', 'action' => 'delete', $userAccountTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountTypes->id)]) ?>
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

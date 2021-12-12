<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationStep $registrationStep
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration Step'), ['action' => 'edit', $registrationStep->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration Step'), ['action' => 'delete', $registrationStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationStep->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registration Steps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration Step'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationSteps view content">
            <h3><?= h($registrationStep->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($registrationStep->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrationStep->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($registrationStep->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($registrationStep->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registrationStep->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registrationStep->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registrationStep->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Conference Locality Registration Steps') ?></h4>
                <?php if (!empty($registrationStep->conference_locality_registration_steps)) : ?>
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
                        <?php foreach ($registrationStep->conference_locality_registration_steps as $conferenceLocalityRegistrationSteps) : ?>
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
        </div>
    </div>
</div>

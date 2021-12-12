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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrationTeam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrationTeam->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registration Teams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationTeams form content">
            <?= $this->Form->create($registrationTeam) ?>
            <fieldset>
                <legend><?= __('Edit Registration Team') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

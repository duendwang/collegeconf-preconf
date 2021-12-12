<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailVariable $emailVariable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Email Variables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailVariables form content">
            <?= $this->Form->create($emailVariable) ?>
            <fieldset>
                <legend><?= __('Add Email Variable') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('value');
                    echo $this->Form->control('description');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

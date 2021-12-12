<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lrc $lrc
 * @var \Cake\Collection\CollectionInterface|string[] $localities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lrcs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lrcs form content">
            <?= $this->Form->create($lrc) ?>
            <fieldset>
                <legend><?= __('Add Lrc') ?></legend>
                <?php
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('locality_id', ['options' => $localities]);
                    echo $this->Form->control('gender');
                    echo $this->Form->control('cell_phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('active');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

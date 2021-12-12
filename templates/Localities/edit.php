<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locality $locality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $locality->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $locality->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Localities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="localities form content">
            <?= $this->Form->create($locality) ?>
            <fieldset>
                <legend><?= __('Edit Locality') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('preferred_conference');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

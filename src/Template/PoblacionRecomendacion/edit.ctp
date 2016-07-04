<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $poblacionRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Poblacions'), ['controller' => 'Poblacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion'), ['controller' => 'Poblacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $poblacionRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Poblacions'), ['controller' => 'Poblacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion'), ['controller' => 'Poblacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($poblacionRecomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Poblacion Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    echo $this->Form->input('poblacion_id', ['options' => $poblacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

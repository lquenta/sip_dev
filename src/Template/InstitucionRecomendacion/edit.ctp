<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucionRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucionRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucionRecomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Institucion Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('institucion_id', ['options' => $institucions]);
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

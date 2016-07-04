<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $poblacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $poblacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $poblacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $poblacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($poblacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Poblacion']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

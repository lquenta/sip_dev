<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $mecanismoRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $mecanismoRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($mecanismoRecomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Mecanismo Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('mecanismo_id', ['options' => $mecanismos]);
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $adjuntosRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosRecomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Adjuntos Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

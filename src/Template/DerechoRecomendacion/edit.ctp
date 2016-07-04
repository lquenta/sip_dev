<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $derechoRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $derechoRecomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($derechoRecomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Derecho Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('derecho_id', ['options' => $derechos]);
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

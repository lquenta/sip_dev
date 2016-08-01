<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $version->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['controller' => 'AdjuntosVersions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Version'), ['controller' => 'AdjuntosVersions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $version->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['controller' => 'AdjuntosVersions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Version'), ['controller' => 'AdjuntosVersions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($version); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Version']) ?></legend>
    <?php
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    echo $this->Form->input('titulo');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('fecha');
    echo $this->Form->input('usuario_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>

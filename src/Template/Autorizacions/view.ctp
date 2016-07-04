<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Autorizacion'), ['action' => 'edit', $autorizacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Autorizacion'), ['action' => 'delete', $autorizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorizacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Autorizacion'), ['action' => 'edit', $autorizacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Autorizacion'), ['action' => 'delete', $autorizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorizacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($autorizacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $autorizacion->has('user') ? $this->Html->link($autorizacion->user->id, ['controller' => 'Users', 'action' => 'view', $autorizacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $autorizacion->has('recomendacion') ? $this->Html->link($autorizacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $autorizacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $autorizacion->has('estado') ? $this->Html->link($autorizacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $autorizacion->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($autorizacion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($autorizacion->fecha_modificacion) ?></td>
        </tr>
        <tr>
            <td><?= __('Visto Bueno Fisico') ?></td>
            <td><?= $this->Text->autoParagraph(h($autorizacion->visto_bueno_fisico)); ?></td>
        </tr>
    </table>
</div>


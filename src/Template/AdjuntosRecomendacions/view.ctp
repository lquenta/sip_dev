<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Adjuntos Recomendacion'), ['action' => 'edit', $adjuntosRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Recomendacion'), ['action' => 'delete', $adjuntosRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Adjuntos Recomendacion'), ['action' => 'edit', $adjuntosRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Recomendacion'), ['action' => 'delete', $adjuntosRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adjuntosRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $adjuntosRecomendacion->has('recomendacion') ? $this->Html->link($adjuntosRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $adjuntosRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($adjuntosRecomendacion->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($adjuntosRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


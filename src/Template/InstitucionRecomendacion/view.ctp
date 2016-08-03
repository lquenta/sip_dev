<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Institucion Recomendacion'), ['action' => 'edit', $institucionRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion Recomendacion'), ['action' => 'delete', $institucionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Institucion Recomendacion'), ['action' => 'edit', $institucionRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion Recomendacion'), ['action' => 'delete', $institucionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($institucionRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Institucion') ?></td>
            <td><?= $institucionRecomendacion->has('institucion') ? $this->Html->link($institucionRecomendacion->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $institucionRecomendacion->institucion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $institucionRecomendacion->has('recomendacion') ? $this->Html->link($institucionRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $institucionRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($institucionRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


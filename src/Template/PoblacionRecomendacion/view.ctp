<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Poblacion Recomendacion'), ['action' => 'edit', $poblacionRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Poblacion Recomendacion'), ['action' => 'delete', $poblacionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacions'), ['controller' => 'Poblacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion'), ['controller' => 'Poblacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Poblacion Recomendacion'), ['action' => 'edit', $poblacionRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Poblacion Recomendacion'), ['action' => 'delete', $poblacionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacions'), ['controller' => 'Poblacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion'), ['controller' => 'Poblacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($poblacionRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $poblacionRecomendacion->has('recomendacion') ? $this->Html->link($poblacionRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $poblacionRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Poblacion') ?></td>
            <td><?= $poblacionRecomendacion->has('poblacion') ? $this->Html->link($poblacionRecomendacion->poblacion->descripcion, ['controller' => 'Poblacions', 'action' => 'view', $poblacionRecomendacion->poblacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($poblacionRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


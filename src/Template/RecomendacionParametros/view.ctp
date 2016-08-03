<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Recomendacion Parametro'), ['action' => 'edit', $recomendacionParametro->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion Parametro'), ['action' => 'delete', $recomendacionParametro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacionParametro->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Recomendacion Parametro'), ['action' => 'edit', $recomendacionParametro->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion Parametro'), ['action' => 'delete', $recomendacionParametro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacionParametro->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($recomendacionParametro->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $recomendacionParametro->has('recomendacion') ? $this->Html->link($recomendacionParametro->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $recomendacionParametro->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($recomendacionParametro->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Prioridad') ?></td>
            <td><?= $this->Number->format($recomendacionParametro->prioridad) ?></td>
        </tr>
        <tr>
            <td><?= __('Tiempo') ?></td>
            <td><?= $this->Number->format($recomendacionParametro->tiempo) ?></td>
        </tr>
    </table>
</div>


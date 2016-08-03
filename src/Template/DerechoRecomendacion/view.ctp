<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Derecho Recomendacion'), ['action' => 'edit', $derechoRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Derecho Recomendacion'), ['action' => 'delete', $derechoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Derecho Recomendacion'), ['action' => 'edit', $derechoRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Derecho Recomendacion'), ['action' => 'delete', $derechoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($derechoRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Derecho') ?></td>
            <td><?= $derechoRecomendacion->has('derecho') ? $this->Html->link($derechoRecomendacion->derecho->descripcion, ['controller' => 'Derechos', 'action' => 'view', $derechoRecomendacion->derecho->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $derechoRecomendacion->has('recomendacion') ? $this->Html->link($derechoRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $derechoRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($derechoRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


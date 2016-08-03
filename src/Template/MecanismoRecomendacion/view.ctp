<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Mecanismo Recomendacion'), ['action' => 'edit', $mecanismoRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mecanismo Recomendacion'), ['action' => 'delete', $mecanismoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Mecanismo Recomendacion'), ['action' => 'edit', $mecanismoRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mecanismo Recomendacion'), ['action' => 'delete', $mecanismoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($mecanismoRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Mecanismo') ?></td>
            <td><?= $mecanismoRecomendacion->has('mecanismo') ? $this->Html->link($mecanismoRecomendacion->mecanismo->descripcion, ['controller' => 'Mecanismos', 'action' => 'view', $mecanismoRecomendacion->mecanismo->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $mecanismoRecomendacion->has('recomendacion') ? $this->Html->link($mecanismoRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $mecanismoRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($mecanismoRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


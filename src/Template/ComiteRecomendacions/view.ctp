<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Comite Recomendacion'), ['action' => 'edit', $comiteRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Comite Recomendacion'), ['action' => 'delete', $comiteRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comiteRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Comite Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Comites'), ['controller' => 'Comites', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite'), ['controller' => 'Comites', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Comite Recomendacion'), ['action' => 'edit', $comiteRecomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Comite Recomendacion'), ['action' => 'delete', $comiteRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comiteRecomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Comite Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Comites'), ['controller' => 'Comites', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite'), ['controller' => 'Comites', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($comiteRecomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $comiteRecomendacion->has('recomendacion') ? $this->Html->link($comiteRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $comiteRecomendacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Comite') ?></td>
            <td><?= $comiteRecomendacion->has('comite') ? $this->Html->link($comiteRecomendacion->comite->IdComite, ['controller' => 'Comites', 'action' => 'view', $comiteRecomendacion->comite->IdComite]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($comiteRecomendacion->id) ?></td>
        </tr>
    </table>
</div>


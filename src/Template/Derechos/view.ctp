<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Derecho'), ['action' => 'edit', $derecho->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Derecho'), ['action' => 'delete', $derecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derecho->id)]) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Derecho'), ['action' => 'edit', $derecho->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Derecho'), ['action' => 'delete', $derecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derecho->id)]) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($derecho->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($derecho->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Indicador') ?></td>
            <td><?= $derecho->has('indicador') ? $this->Html->link($derecho->indicador->id, ['controller' => 'Indicadors', 'action' => 'view', $derecho->indicador->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($derecho->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related DerechoRecomendacion') ?></h3>
    </div>
    <?php if (!empty($derecho->derecho_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Derecho Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($derecho->derecho_recomendacion as $derechoRecomendacion): ?>
                <tr>
                    <td><?= h($derechoRecomendacion->id) ?></td>
                    <td><?= h($derechoRecomendacion->derecho_id) ?></td>
                    <td><?= h($derechoRecomendacion->recomendacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'DerechoRecomendacion', 'action' => 'view', $derechoRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'DerechoRecomendacion', 'action' => 'edit', $derechoRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'DerechoRecomendacion', 'action' => 'delete', $derechoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related DerechoRecomendacion</p>
    <?php endif; ?>
</div>

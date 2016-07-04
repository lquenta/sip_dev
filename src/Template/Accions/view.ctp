<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Accion'), ['action' => 'edit', $accion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Accion'), ['action' => 'delete', $accion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Accions'), ['controller' => 'AdjuntosAccions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Accion'), ['controller' => 'AdjuntosAccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Accion'), ['action' => 'edit', $accion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Accion'), ['action' => 'delete', $accion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Accions'), ['controller' => 'AdjuntosAccions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Accion'), ['controller' => 'AdjuntosAccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($accion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($accion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Usuario') ?></td>
            <td><?= $accion->has('usuario') ? $this->Html->link($accion->usuario->id, ['controller' => 'Users', 'action' => 'view', $accion->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $accion->has('recomendacion') ? $this->Html->link($accion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $accion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Politica') ?></td>
            <td><?= h($accion->politica) ?></td>
        </tr>
        <tr>
            <td><?= __('Programa') ?></td>
            <td><?= h($accion->programa) ?></td>
        </tr>
        <tr>
            <td><?= __('Direccion') ?></td>
            <td><?= h($accion->direccion) ?></td>
        </tr>
        <tr>
            <td><?= __('Reporte') ?></td>
            <td><?= h($accion->reporte) ?></td>
        </tr>
        <tr>
            <td><?= __('Desafios') ?></td>
            <td><?= h($accion->desafios) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($accion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha') ?></td>
            <td><?= h($accion->fecha) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related AdjuntosAccions') ?></h3>
    </div>
    <?php if (!empty($accion->adjuntos_accions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Accion Id') ?></th>
                <th><?= __('Link') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($accion->adjuntos_accions as $adjuntosAccions): ?>
                <tr>
                    <td><?= h($adjuntosAccions->id) ?></td>
                    <td><?= h($adjuntosAccions->accion_id) ?></td>
                    <td><?= h($adjuntosAccions->link) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'AdjuntosAccions', 'action' => 'view', $adjuntosAccions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'AdjuntosAccions', 'action' => 'edit', $adjuntosAccions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'AdjuntosAccions', 'action' => 'delete', $adjuntosAccions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related AdjuntosAccions</p>
    <?php endif; ?>
</div>

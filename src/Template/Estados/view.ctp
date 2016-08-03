<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($estado->descripcion) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($estado->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Autorizacions') ?></h3>
    </div>
    <?php if (!empty($estado->autorizacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Estado Id') ?></th>
                <th><?= __('Fecha Modificacion') ?></th>
                <th><?= __('Visto Bueno Fisico') ?></th>
                <th><?= __('Accion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($estado->autorizacions as $autorizacions): ?>
                <tr>
                    <td><?= h($autorizacions->id) ?></td>
                    <td><?= h($autorizacions->usuario_id) ?></td>
                    <td><?= h($autorizacions->estado_id) ?></td>
                    <td><?= h($autorizacions->fecha_modificacion) ?></td>
                    <td><?= h($autorizacions->visto_bueno_fisico) ?></td>
                    <td><?= h($autorizacions->accion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Autorizacions', 'action' => 'view', $autorizacions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Autorizacions', 'action' => 'edit', $autorizacions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Autorizacions', 'action' => 'delete', $autorizacions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorizacions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Autorizacions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Recomendacions') ?></h3>
    </div>
    <?php if (!empty($estado->recomendacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha Creacion') ?></th>
                <th><?= __('Fecha Modificacion') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Estado Id') ?></th>
                <th><?= __('Año') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($estado->recomendacions as $recomendacions): ?>
                <tr>
                    <td><?= h($recomendacions->id) ?></td>
                    <td><?= h($recomendacions->descripcion) ?></td>
                    <td><?= h($recomendacions->fecha_creacion) ?></td>
                    <td><?= h($recomendacions->fecha_modificacion) ?></td>
                    <td><?= h($recomendacions->usuario_id) ?></td>
                    <td><?= h($recomendacions->estado_id) ?></td>
                    <td><?= h($recomendacions->año) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Recomendacions', 'action' => 'view', $recomendacions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Recomendacions', 'action' => 'edit', $recomendacions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Recomendacions', 'action' => 'delete', $recomendacions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Recomendacions</p>
    <?php endif; ?>
</div>

<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Rol'), ['action' => 'edit', $rol->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Rol'), ['action' => 'delete', $rol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->id)]) ?> </li>
<li><?= $this->Html->link(__('List Rols'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rol'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Rol'), ['action' => 'edit', $rol->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Rol'), ['action' => 'delete', $rol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->id)]) ?> </li>
<li><?= $this->Html->link(__('List Rols'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rol'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($rol->nombre) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($rol->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Institucion') ?></td>
            <td><?= $rol->has('institucion') ? $this->Html->link($rol->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $rol->institucion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($rol->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('usuarios relacionados') ?></h3>
    </div>
    <?php if (!empty($rol->users)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre Usuario') ?></th>
                <th><?= __('Fecha Creacion') ?></th>
                <th><?= __('Fecha Modificacion') ?></th>
                <th><?= __('Rol Id') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rol->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->nombre_usuario) ?></td>
                    <td><?= h($users->fecha_creacion) ?></td>
                    <td><?= h($users->fecha_modificacion) ?></td>
                    <td><?= h($users->rol_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Users', 'action' => 'edit', $users->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                       
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Users</p>
    <?php endif; ?>
</div>

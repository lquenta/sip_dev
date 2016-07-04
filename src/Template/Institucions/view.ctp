<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Institucion'), ['action' => 'edit', $institucion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion'), ['action' => 'delete', $institucion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Institucion'), ['action' => 'edit', $institucion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion'), ['action' => 'delete', $institucion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($institucion->descripcion) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($institucion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($institucion->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related InstitucionRecomendacion') ?></h3>
    </div>
    <?php if (!empty($institucion->institucion_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Institucion Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($institucion->institucion_recomendacion as $institucionRecomendacion): ?>
                <tr>
                    <td><?= h($institucionRecomendacion->id) ?></td>
                    <td><?= h($institucionRecomendacion->institucion_id) ?></td>
                    <td><?= h($institucionRecomendacion->recomendacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'InstitucionRecomendacion', 'action' => 'view', $institucionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'InstitucionRecomendacion', 'action' => 'edit', $institucionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'InstitucionRecomendacion', 'action' => 'delete', $institucionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related InstitucionRecomendacion</p>
    <?php endif; ?>
</div>

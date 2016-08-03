<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Poblacion'), ['action' => 'edit', $poblacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Poblacion'), ['action' => 'delete', $poblacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Poblacion'), ['action' => 'edit', $poblacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Poblacion'), ['action' => 'delete', $poblacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($poblacion->descripcion) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($poblacion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($poblacion->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related PoblacionRecomendacion') ?></h3>
    </div>
    <?php if (!empty($poblacion->poblacion_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Poblacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($poblacion->poblacion_recomendacion as $poblacionRecomendacion): ?>
                <tr>
                    <td><?= h($poblacionRecomendacion->id) ?></td>
                    <td><?= h($poblacionRecomendacion->recomendacion_id) ?></td>
                    <td><?= h($poblacionRecomendacion->poblacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'PoblacionRecomendacion', 'action' => 'view', $poblacionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'PoblacionRecomendacion', 'action' => 'edit', $poblacionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'PoblacionRecomendacion', 'action' => 'delete', $poblacionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related PoblacionRecomendacion</p>
    <?php endif; ?>
</div>

<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Mecanismo'), ['action' => 'edit', $mecanismo->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mecanismo'), ['action' => 'delete', $mecanismo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismo->id)]) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Mecanismo'), ['action' => 'edit', $mecanismo->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mecanismo'), ['action' => 'delete', $mecanismo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismo->id)]) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($mecanismo->descripcion) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($mecanismo->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($mecanismo->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related MecanismoRecomendacion') ?></h3>
    </div>
    <?php if (!empty($mecanismo->mecanismo_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Mecanismo Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($mecanismo->mecanismo_recomendacion as $mecanismoRecomendacion): ?>
                <tr>
                    <td><?= h($mecanismoRecomendacion->id) ?></td>
                    <td><?= h($mecanismoRecomendacion->mecanismo_id) ?></td>
                    <td><?= h($mecanismoRecomendacion->recomendacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'MecanismoRecomendacion', 'action' => 'view', $mecanismoRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'MecanismoRecomendacion', 'action' => 'edit', $mecanismoRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'MecanismoRecomendacion', 'action' => 'delete', $mecanismoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related MecanismoRecomendacion</p>
    <?php endif; ?>
</div>

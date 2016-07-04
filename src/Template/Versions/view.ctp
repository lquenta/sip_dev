<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Versions'), ['controller' => 'AdjuntosVersions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Version'), ['controller' => 'AdjuntosVersions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Versions'), ['controller' => 'AdjuntosVersions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Version'), ['controller' => 'AdjuntosVersions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($version->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $version->has('recomendacion') ? $this->Html->link($version->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $version->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Titulo') ?></td>
            <td><?= h($version->titulo) ?></td>
        </tr>
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($version->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Usuario') ?></td>
            <td><?= $version->has('usuario') ? $this->Html->link($version->usuario->id, ['controller' => 'Users', 'action' => 'view', $version->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($version->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha') ?></td>
            <td><?= h($version->fecha) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related AdjuntosVersions') ?></h3>
    </div>
    <?php if (!empty($version->adjuntos_versions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Version Id') ?></th>
                <th><?= __('Link') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($version->adjuntos_versions as $adjuntosVersions): ?>
                <tr>
                    <td><?= h($adjuntosVersions->id) ?></td>
                    <td><?= h($adjuntosVersions->version_id) ?></td>
                    <td><?= h($adjuntosVersions->link) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'AdjuntosVersions', 'action' => 'view', $adjuntosVersions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'AdjuntosVersions', 'action' => 'edit', $adjuntosVersions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'AdjuntosVersions', 'action' => 'delete', $adjuntosVersions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related AdjuntosVersions</p>
    <?php endif; ?>
</div>

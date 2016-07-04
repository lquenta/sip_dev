<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Indicador'), ['action' => 'edit', $indicador->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicador'), ['action' => 'delete', $indicador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicador->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Indicador'), ['action' => 'edit', $indicador->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicador'), ['action' => 'delete', $indicador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicador->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($indicador->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($indicador->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($indicador->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($indicador->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Derechos') ?></h3>
    </div>
    <?php if (!empty($indicador->derechos)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Indicador Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($indicador->derechos as $derechos): ?>
                <tr>
                    <td><?= h($derechos->id) ?></td>
                    <td><?= h($derechos->descripcion) ?></td>
                    <td><?= h($derechos->indicador_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Derechos', 'action' => 'view', $derechos->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Derechos', 'action' => 'edit', $derechos->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Derechos', 'action' => 'delete', $derechos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechos->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Derechos</p>
    <?php endif; ?>
</div>

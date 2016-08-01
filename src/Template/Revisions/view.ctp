<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Revision'), ['action' => 'edit', $revision->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Revision'), ['action' => 'delete', $revision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $revision->id)]) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Revision'), ['action' => 'edit', $revision->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Revision'), ['action' => 'delete', $revision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $revision->id)]) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($revision->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $revision->has('recomendacion') ? $this->Html->link($revision->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $revision->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $revision->has('user') ? $this->Html->link($revision->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $revision->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Resultado') ?></td>
            <td><?= h($revision->resultado) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($revision->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha') ?></td>
            <td><?= h($revision->fecha) ?></td>
        </tr>
    </table>
</div>


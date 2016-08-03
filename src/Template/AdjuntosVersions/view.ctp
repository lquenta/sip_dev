<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Adjuntos Version'), ['action' => 'edit', $adjuntosVersion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Version'), ['action' => 'delete', $adjuntosVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Version'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Adjuntos Version'), ['action' => 'edit', $adjuntosVersion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Version'), ['action' => 'delete', $adjuntosVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Version'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adjuntosVersion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Version') ?></td>
            <td><?= $adjuntosVersion->has('version') ? $this->Html->link($adjuntosVersion->version->id, ['controller' => 'Versions', 'action' => 'view', $adjuntosVersion->version->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($adjuntosVersion->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($adjuntosVersion->id) ?></td>
        </tr>
    </table>
</div>


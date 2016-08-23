<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Comite'), ['action' => 'edit', $comite->IdComite]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Comite'), ['action' => 'delete', $comite->IdComite], ['confirm' => __('Are you sure you want to delete # {0}?', $comite->IdComite)]) ?> </li>
<li><?= $this->Html->link(__('List Comites'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Comite'), ['action' => 'edit', $comite->IdComite]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Comite'), ['action' => 'delete', $comite->IdComite], ['confirm' => __('Are you sure you want to delete # {0}?', $comite->IdComite)]) ?> </li>
<li><?= $this->Html->link(__('List Comites'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Comite'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($comite->IdComite) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($comite->Descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Mecanismo') ?></td>
            <td><?= $comite->has('mecanismo') ? $this->Html->link($comite->mecanismo->descripcion, ['controller' => 'Mecanismos', 'action' => 'view', $comite->mecanismo->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('IdComite') ?></td>
            <td><?= $this->Number->format($comite->IdComite) ?></td>
        </tr>
    </table>
</div>


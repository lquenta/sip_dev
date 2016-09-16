<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $comite->IdComite],
        ['confirm' => __('Are you sure you want to delete # {0}?', $comite->IdComite)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Comites'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $comite->IdComite],
        ['confirm' => __('Are you sure you want to delete # {0}?', $comite->IdComite)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Comites'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => 'Mecanismos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($comite); ?>
<fieldset>
    <legend><?= __('Editar {0}', ['Comite']) ?></legend>
    <?php
    echo $this->Form->input('Descripcion');
    echo $this->Form->input('mecanismo_id', ['options' => $mecanismos]);
    ?>
</fieldset>
<?= $this->Form->button(__("Grabar")); ?>
<?= $this->Form->end() ?>

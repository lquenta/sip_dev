<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Institucion Solicitude'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => ' Institucions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SolicitudInformacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => ' SolicitudInformacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('institucion_id'); ?></th>
            <th><?= $this->Paginator->sort('solicitud_informacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($institucionSolicitudes as $institucionSolicitude): ?>
        <tr>
            <td><?= $this->Number->format($institucionSolicitude->id) ?></td>
            <td>
                <?= $institucionSolicitude->has('institucion') ? $this->Html->link($institucionSolicitude->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $institucionSolicitude->institucion->id]) : '' ?>
            </td>
            <td>
                <?= $institucionSolicitude->has('solicitud_informacion') ? $this->Html->link($institucionSolicitude->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $institucionSolicitude->solicitud_informacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $institucionSolicitude->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $institucionSolicitude->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $institucionSolicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitude->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
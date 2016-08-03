<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Adjuntos Version'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => ' Versions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('version_id'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adjuntosVersions as $adjuntosVersion): ?>
        <tr>
            <td><?= $this->Number->format($adjuntosVersion->id) ?></td>
            <td>
                <?= $adjuntosVersion->has('version') ? $this->Html->link($adjuntosVersion->version->id, ['controller' => 'Versions', 'action' => 'view', $adjuntosVersion->version->id]) : '' ?>
            </td>
            <td><?= h($adjuntosVersion->link) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $adjuntosVersion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $adjuntosVersion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $adjuntosVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
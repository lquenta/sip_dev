<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Ver Recomendacion');

?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($recomendacion->codigo) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($recomendacion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $recomendacion->estado->descripcion ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($recomendacion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Año') ?></td>
            <td><?= $this->Number->format($recomendacion->año) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Creacion') ?></td>
            <td><?= h($recomendacion->fecha_creacion) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($recomendacion->fecha_modificacion) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Segumientos relacionados') ?></h3>
    </div>
    <?php if (!empty($recomendacion->accions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Codigo') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Politica') ?></th>
                <th class="actions"><?= __('Acceso Directo') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->accions as $accions): ?>
                <tr>
                    <td><?= h($accions->id) ?></td>
                    <td><?= h($accions->codigo) ?></td>
                    <td><?= h($accions->descripcion) ?></td>
                    <td><?= h($accions->fecha) ?></td>
                    <td><?= h($accions->usuario_id) ?></td>
                    <td><?= h($accions->recomendacion_id) ?></td>
                    <td><?= h($accions->politica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Accions', 'action' => 'view', $accions->id], ['title' => __('Ver'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">No hay segumientos sobre esta recomendacion</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Archivos adjuntos relacionados') ?></h3>
    </div>
    <?php if (!empty($recomendacion->adjuntos_recomendacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Id Recomendacion') ?></th>                
                <th><?= __('Link') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->adjuntos_recomendacions as $adjuntosRecomendacions): ?>
                <tr>
                    <td><?= h($adjuntosRecomendacions->id) ?></td>
                    <td><?= h($adjuntosRecomendacions->recomendacion_id) ?></td>
                    <td><?php
                     echo $this->Html->link(
                                '<i class="glyphicon glyphicon-save-file">'.$adjuntosRecomendacions->link.'</i>',
                                '/uploads/'.$adjuntosRecomendacions->link,
                                ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                            );
                            ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">Ho hay archivos adjuntos relacionados</p>
    <?php endif; ?>
</div>

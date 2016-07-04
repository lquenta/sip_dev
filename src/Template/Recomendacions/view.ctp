<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Recomendacion'), ['action' => 'edit', $recomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion'), ['action' => 'delete', $recomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Recomendacion'), ['action' => 'edit', $recomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion'), ['action' => 'delete', $recomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($recomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Titulo') ?></td>
            <td><?= h($recomendacion->titulo) ?></td>
        </tr>
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($recomendacion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->id, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $recomendacion->has('estado') ? $this->Html->link($recomendacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $recomendacion->estado->id]) : '' ?></td>
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
        <h3 class="panel-title"><?= __('Related Accions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->accions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Politica') ?></th>
                <th><?= __('Programa') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Reporte') ?></th>
                <th><?= __('Desafios') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->accions as $accions): ?>
                <tr>
                    <td><?= h($accions->id) ?></td>
                    <td><?= h($accions->descripcion) ?></td>
                    <td><?= h($accions->fecha) ?></td>
                    <td><?= h($accions->usuario_id) ?></td>
                    <td><?= h($accions->recomendacion_id) ?></td>
                    <td><?= h($accions->politica) ?></td>
                    <td><?= h($accions->programa) ?></td>
                    <td><?= h($accions->direccion) ?></td>
                    <td><?= h($accions->reporte) ?></td>
                    <td><?= h($accions->desafios) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Accions', 'action' => 'view', $accions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Accions', 'action' => 'edit', $accions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Accions', 'action' => 'delete', $accions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Accions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related AdjuntosRecomendacions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->adjuntos_recomendacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Link') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->adjuntos_recomendacions as $adjuntosRecomendacions): ?>
                <tr>
                    <td><?= h($adjuntosRecomendacions->id) ?></td>
                    <td><?= h($adjuntosRecomendacions->recomendacion_id) ?></td>
                    <td><?= h($adjuntosRecomendacions->link) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'AdjuntosRecomendacions', 'action' => 'view', $adjuntosRecomendacions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'AdjuntosRecomendacions', 'action' => 'edit', $adjuntosRecomendacions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'AdjuntosRecomendacions', 'action' => 'delete', $adjuntosRecomendacions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosRecomendacions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related AdjuntosRecomendacions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Autorizacions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->autorizacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Estado Id') ?></th>
                <th><?= __('Fecha Modificacion') ?></th>
                <th><?= __('Visto Bueno Fisico') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->autorizacions as $autorizacions): ?>
                <tr>
                    <td><?= h($autorizacions->id) ?></td>
                    <td><?= h($autorizacions->usuario_id) ?></td>
                    <td><?= h($autorizacions->recomendacion_id) ?></td>
                    <td><?= h($autorizacions->estado_id) ?></td>
                    <td><?= h($autorizacions->fecha_modificacion) ?></td>
                    <td><?= h($autorizacions->visto_bueno_fisico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Autorizacions', 'action' => 'view', $autorizacions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Autorizacions', 'action' => 'edit', $autorizacions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Autorizacions', 'action' => 'delete', $autorizacions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorizacions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Autorizacions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related DerechoRecomendacion') ?></h3>
    </div>
    <?php if (!empty($recomendacion->derecho_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Derecho Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->derecho_recomendacion as $derechoRecomendacion): ?>
                <tr>
                    <td><?= h($derechoRecomendacion->id) ?></td>
                    <td><?= h($derechoRecomendacion->derecho_id) ?></td>
                    <td><?= h($derechoRecomendacion->recomendacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'DerechoRecomendacion', 'action' => 'view', $derechoRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'DerechoRecomendacion', 'action' => 'edit', $derechoRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'DerechoRecomendacion', 'action' => 'delete', $derechoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related DerechoRecomendacion</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related InstitucionRecomendacion') ?></h3>
    </div>
    <?php if (!empty($recomendacion->institucion_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Institucion Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->institucion_recomendacion as $institucionRecomendacion): ?>
                <tr>
                    <td><?= h($institucionRecomendacion->id) ?></td>
                    <td><?= h($institucionRecomendacion->institucion_id) ?></td>
                    <td><?= h($institucionRecomendacion->recomendacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'InstitucionRecomendacion', 'action' => 'view', $institucionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'InstitucionRecomendacion', 'action' => 'edit', $institucionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'InstitucionRecomendacion', 'action' => 'delete', $institucionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related InstitucionRecomendacion</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related MecanismoRecomendacion') ?></h3>
    </div>
    <?php if (!empty($recomendacion->mecanismo_recomendacion)): ?>
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
            <?php foreach ($recomendacion->mecanismo_recomendacion as $mecanismoRecomendacion): ?>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Notificacions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->notificacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Mensaje') ?></th>
                <th><?= __('Fecha') ?></th>
                <th><?= __('Estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->notificacions as $notificacions): ?>
                <tr>
                    <td><?= h($notificacions->id) ?></td>
                    <td><?= h($notificacions->recomendacion_id) ?></td>
                    <td><?= h($notificacions->usuario_id) ?></td>
                    <td><?= h($notificacions->mensaje) ?></td>
                    <td><?= h($notificacions->fecha) ?></td>
                    <td><?= h($notificacions->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Notificacions', 'action' => 'view', $notificacions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Notificacions', 'action' => 'edit', $notificacions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Notificacions', 'action' => 'delete', $notificacions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Notificacions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related PoblacionRecomendacion') ?></h3>
    </div>
    <?php if (!empty($recomendacion->poblacion_recomendacion)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Poblacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->poblacion_recomendacion as $poblacionRecomendacion): ?>
                <tr>
                    <td><?= h($poblacionRecomendacion->id) ?></td>
                    <td><?= h($poblacionRecomendacion->recomendacion_id) ?></td>
                    <td><?= h($poblacionRecomendacion->poblacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'PoblacionRecomendacion', 'action' => 'view', $poblacionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'PoblacionRecomendacion', 'action' => 'edit', $poblacionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'PoblacionRecomendacion', 'action' => 'delete', $poblacionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related PoblacionRecomendacion</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related RecomendacionParametros') ?></h3>
    </div>
    <?php if (!empty($recomendacion->recomendacion_parametros)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Prioridad') ?></th>
                <th><?= __('Tiempo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->recomendacion_parametros as $recomendacionParametros): ?>
                <tr>
                    <td><?= h($recomendacionParametros->id) ?></td>
                    <td><?= h($recomendacionParametros->recomendacion_id) ?></td>
                    <td><?= h($recomendacionParametros->prioridad) ?></td>
                    <td><?= h($recomendacionParametros->tiempo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'RecomendacionParametros', 'action' => 'view', $recomendacionParametros->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'RecomendacionParametros', 'action' => 'edit', $recomendacionParametros->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'RecomendacionParametros', 'action' => 'delete', $recomendacionParametros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacionParametros->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related RecomendacionParametros</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Revisions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->revisions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Resultado') ?></th>
                <th><?= __('Fecha') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->revisions as $revisions): ?>
                <tr>
                    <td><?= h($revisions->id) ?></td>
                    <td><?= h($revisions->recomendacion_id) ?></td>
                    <td><?= h($revisions->usuario_id) ?></td>
                    <td><?= h($revisions->resultado) ?></td>
                    <td><?= h($revisions->fecha) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Revisions', 'action' => 'view', $revisions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Revisions', 'action' => 'edit', $revisions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Revisions', 'action' => 'delete', $revisions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $revisions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Revisions</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Versions') ?></h3>
    </div>
    <?php if (!empty($recomendacion->versions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->versions as $versions): ?>
                <tr>
                    <td><?= h($versions->id) ?></td>
                    <td><?= h($versions->recomendacion_id) ?></td>
                    <td><?= h($versions->titulo) ?></td>
                    <td><?= h($versions->descripcion) ?></td>
                    <td><?= h($versions->fecha) ?></td>
                    <td><?= h($versions->usuario_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Versions', 'action' => 'view', $versions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Versions', 'action' => 'edit', $versions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Versions', 'action' => 'delete', $versions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $versions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Versions</p>
    <?php endif; ?>
</div>

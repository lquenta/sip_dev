<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

?>
<div class="row">
<h2>Pendientes</h2>
<?php if(count($solicitudInformacions)>0){ ?>
<h2>Pendientes de responder, solicitud de informacion</h2>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('codigo'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudInformacions as $solicitudInformacion): ?>
        <tr>
            <td><?= $this->Number->format($solicitudInformacion->id) ?></td>
            <td><?= h($solicitudInformacion->codigo) ?></td>
            <td><?= h($solicitudInformacion->descripcion) ?></td>
            <td><?= h($solicitudInformacion->fecha_modificacion) ?></td>
            <td>
                <?= $solicitudInformacion->has('user') ? $this->Html->link($solicitudInformacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudInformacion->user->id]) : '' ?>
            </td>
            
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $solicitudInformacion->id], ['title' => __('Ver Detalle'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['controller'=>'SolicitudRespuestas', 'action' => 'add', $solicitudInformacion->id], ['title' => __('Responder Solicitud'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php } ?>

<?php if(count($autorizacions)>0){ ?>
<h2>Pendientes de autorizacion</h2>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('codigo','Código'); ?></th>
            <th><?= $this->Paginator->sort('accion_id','Acción'); ?></th>
            <th><?= $this->Paginator->sort('estado_id','Estado'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion','Fecha de Modificación'); ?></th>
            <th class="actions"><?= __('Aprobar/Rechazar'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autorizacions as $autorizacion): ?>
        <tr>
            <td>
                <?= $autorizacion->has('accion') ? $this->Html->link($autorizacion->accion->codigo, ['controller' => 'Accions', 'action' => 'view', $autorizacion->accion->id]) : '' ?>
            </td>
            <td>
                <?= $autorizacion->has('accion') ? $this->Html->link($autorizacion->accion->descripcion, ['controller' => 'Accions', 'action' => 'view', $autorizacion->accion->id]) : '' ?>
            </td>
            <td>
                <?= $autorizacion->estado->descripcion?>           </td>
            <td><?= h($autorizacion->fecha_modificacion) ?></td>
            <td> <?= $this->Html->link('', ['controller'=>'Autorizacions','action' => 'aprobarAccion', $autorizacion->accion->id], ['title' => __('Aprobar/Rechazar'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php } ?>

</div>
<div class="page-header">
                            <h1>
                                Panel de control
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Resumen &amp; estadisticas
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="alert alert-block alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-close red"></i>

                                   Existen acciones pendientes de autorizacion
                                </div>

                                <div class="row">
                                    <div class="space-6"></div>

                                    <div class="col-sm-7 infobox-container">
                                        <div class="infobox infobox-green">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-comments"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number">10</span>
                                                <div class="infobox-content">Acciones</div>
                                            </div>

                                            <div class="stat stat-success">8%</div>
                                        </div>

                                        <div class="infobox infobox-blue">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-twitter"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number">5</span>
                                                <div class="infobox-content">Notas de seguimiento</div>
                                            </div>

                                            <div class="badge badge-success">
                                                +32%
                                                <i class="ace-icon fa fa-arrow-up"></i>
                                            </div>
                                        </div>

                                        <div class="infobox infobox-pink">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-shopping-cart"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number">8</span>
                                                <div class="infobox-content">Autorizaciones</div>
                                            </div>
                                            <div class="stat stat-important">4%</div>
                                        </div>

                                        <div class="infobox infobox-orange2">
                                            <div class="infobox-chart">
                                                <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number">20</span>
                                                <div class="infobox-content">Búsquedas</div>
                                            </div>

                                            <div class="badge badge-success">
                                                7.2%
                                                <i class="ace-icon fa fa-arrow-up"></i>
                                            </div>
                                        </div>

                                        

                                        <div class="space-6"></div>

                                           

                                    <div class="vspace-12-sm"></div>

                                   
                                </div><!-- /.row -->

                                <div class="hr hr32 hr-dotted"></div>

                               
                                <div class="hr hr32 hr-dotted"></div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="widget-box transparent" id="recent-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title lighter smaller">
                                                    <i class="ace-icon fa fa-rss orange"></i>Reciente
                                                </h4>

                                                <div class="widget-toolbar no-border">
                                                    <ul class="nav nav-tabs" id="recent-tab">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#task-tab">Acciones</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#member-tab">Autorizadores</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#comment-tab">Seguimiento</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-4">
                                                    <div class="tab-content padding-8">
                                                        <div id="task-tab" class="tab-pane active">
                                                            <h4 class="smaller lighter green">
                                                                <i class="ace-icon fa fa-list"></i>
                                                                Lista de Acciones pendientes
                                                            </h4>

                                                            <ul id="tasks" class="item-list">
                                                              

                                                                <li class="item-red clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> El Comité destaca la función decisiva que desempeña el poder legislativo para velar por la plena aplicación de la Convención</span>
                                                                    </label>

                                                                    <div class="pull-right action-buttons">
                                                                        <a href="#" class="blue">
                                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                        </a>

                                                                        <span class="vbar"></span>

                                                                        <a href="#" class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                        </a>

                                                                        <span class="vbar"></span>

                                                                        <a href="#" class="green">
                                                                            <i class="ace-icon fa fa-flag bigger-130"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>

                                                               
                                                            </ul>
                                                        </div>

                                                        <div id="member-tab" class="tab-pane">
                                                            <div class="clearfix">
                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                    <?=$this->Html->image('avatars/user.jpg', ['class' => 'msg-photo']);?>
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Carlos Encinas</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">20 min</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-warning label-sm">pendientes</span>

                                                                            <div class="inline position-relative">
                                                                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                            <span class="orange">
                                                                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                         <?=$this->Html->image('avatars/avatar2.png', ['class' => 'msg-photo']);?>
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Luis Zudañes</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">1 hora</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-warning label-sm">pendiente</span>

                                                                            <div class="inline position-relative">
                                                                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                            <span class="orange">
                                                                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               

                                                               
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="center">
                                                                <i class="ace-icon fa fa-users fa-2x green middle"></i>

                                                                &nbsp;
                                                                <a href="#" class="btn btn-sm btn-white btn-info">
                                                                    Ver Todos los miembros &nbsp;
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hr hr-double hr8"></div>
                                                        </div><!-- /.#member-tab -->

                                                        <div id="comment-tab" class="tab-pane">
                                                            <div class="comments">
                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                     <?=$this->Html->image('avatars/avatar.png', ['class' => 'msg-photo']);?>
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Luis Zudañes</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">6 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="inline position-relative">
                                                                            <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                        <span class="green">
                                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                        <span class="orange">
                                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                         <?=$this->Html->image('avatars/avatar2.png', ['class' => 'msg-photo']);?>
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Carla Salinas</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="blue">15 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="action-buttons bigger-125">
                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-pencil blue"></i>
                                                                            </a>

                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-trash-o red"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                               
                                                            </div>

                                                            <div class="hr hr8"></div>

                                                            <div class="center">
                                                                <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                                                                &nbsp;
                                                                <a href="#" class="btn btn-sm btn-white btn-info">
                                                                    Ver todos los seguimientos &nbsp;
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hr hr-double hr8"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div><!-- /.col -->

                                   
                                </div><!-- /.row -->
 <script type="text/javascript">
            jQuery(function($) {
                /*$('.easy-pie-chart.percentage').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate: ace.vars['old_ie'] ? false : 1000,
                        size: size
                    });
                })*/
            
                $('.sparkline').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                                     {
                                        tagValuesAttribute:'data-values',
                                        type: 'bar',
                                        barColor: barColor ,
                                        chartRangeMin:$(this).data('min') || 0
                                     });
                });
            
            
              //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
              //but sometimes it brings up errors with normal resize event handlers
              $.resize.throttleWindow = false;
            
              var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
              var data = [
                { label: "social networks",  data: 38.7, color: "#68BC31"},
                { label: "search engines",  data: 24.5, color: "#2091CF"},
                { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
                { label: "direct traffic",  data: 18.6, color: "#DA5430"},
                { label: "other",  data: 10, color: "#FEE074"}
              ]
              function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                 })
             }
             //drawPieChart(placeholder, data);
            
             
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);
            
            
              //pie chart tooltip example
              var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
              var previousPoint = null;
            
              placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
             });
            
                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function(e) {
                    $tooltip.remove();
                });
            
            
            
            
                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }
            
                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }
            
                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }
                
            
                /*var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
                $.plot("#sales-charts", [
                    { label: "Domains", data: d1 },
                    { label: "Hosting", data: d2 },
                    { label: "Services", data: d3 }
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: { colors: [ "#fff", "#fff" ] },
                        borderWidth: 1,
                        borderColor:'#555'
                    }
                });*/
            
            
                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            
            
                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });
                
                
                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if(ace.vars['touch'] && ace.vars['android']) {
                  $('#tasks').on('touchstart', function(e){
                    var li = $(e.target).closest('#tasks li');
                    if(li.length == 0)return;
                    var label = li.find('label.inline').get(0);
                    if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
                  });
                }
            
                $('#tasks').sortable({
                    opacity:0.8,
                    revert:true,
                    forceHelperSize:true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize:true,
                    tolerance:'pointer',
                    stop: function( event, ui ) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                    }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
                    if(this.checked) $(this).closest('li').addClass('selected');
                    else $(this).closest('li').removeClass('selected');
                });
            
            
                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
                    var offset = $(this).offset();
            
                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
                        $(this).addClass('dropup');
                    else $(this).removeClass('dropup');
                });
            
            })
        </script>
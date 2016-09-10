<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

?>
<div class="page-header">
                            <h1>
                                Panel de control
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

                                    <div class="col-sm-7 infobox-container" style="display:none">
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

                                   
                                </div>

                                    
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="widget-box transparent" id="recent-box">
                                           

                                            <div class="widget-body">
                                                <div class="widget-main padding-4">
                                                    <div class="tab-content padding-8">
                                                        <div>

                                                          <!-- Nav tabs -->
                                                          <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#Recomendaciones" aria-controls="Recomendaciones" role="tab" data-toggle="tab">Recomendaciones</a></li>
                                                            <li role="presentation"><a href="#Solicitudes" aria-controls="Solicitudes" role="tab" data-toggle="tab">Solicitudes</a></li>
                                                            <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pendientes</a></li>
                                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Seguimientos sin responder</a></li>
                                                            <li role="presentation"><a href="#Consolidado" aria-controls="Consolidado" role="tab" data-toggle="tab">Visor Gráfico</a></li>
                                                            
                                                          </ul>

                                                          <!-- Tab panes -->
                                                          <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="Recomendaciones">
                                                                
                                                                 <a href="<?= $this->Url->build(["controller" => "Recomendacions","action" => "add"]); ?>" class="btn btn-large btn-default" style="margin:5px">
                                                                  <img src="images/add.jpg" width="35" />
                                                                 Nueva Recomendación
                                                                 </a>
                                                                
                                                                 <div class="panel">                                                                                                                                    
                                                                    <?php echo $this->requestAction('/recomendacions'); ?>    
                                                                  
                                                                </div>     
                                                                
                                                            </div>
                                                             <div role="tabpanel" class="tab-pane" id="Solicitudes">

                                                                  <a href="<?= $this->Url->build(["controller" => "solicitud_informacions","action" => "add"]); ?>" class="btn btn-large btn-default" style="margin:5px">
                                                                  <img src="images/add.jpg" width="35" />
                                                                 Nueva Solicitud
                                                                 </a>
                                                                
                                                                
                                                                <div class="panel panel-primary">
                                                                  <div class="panel-heading">Solicitudes pendientes de respuesta</div>
                                                                  <div class="panel-body" style="overflow-y: scroll; max-height: 300px;">
                                                                    <?php echo $this->requestAction('/solicitud-informacions'); ?>    
                                                                  </div>
                                                                </div>                                                                
                                                                
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="home">
                                                                <?php if($solicitudInformacions->count()>0 && false){ ?>
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

                                                                <?php if($autorizacions->count()>0){ ?>
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
                                                                <?php if($accionSolicitud->count()>0){?>
                                                                    <h2>Pendientes de respuesta</h2>
                                                                    <table class="table table-striped" cellpadding="0" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><?= $this->Paginator->sort('id'); ?></th>
                                                                                <th><?= $this->Paginator->sort('accion_id','Accion'); ?></th>
                                                                                <th><?= $this->Paginator->sort('fecha'); ?></th>
                                                                                <th class="actions"><?= __('Responder'); ?></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($accionSolicitud as $accion_sol): ?>
                                                                            <tr>
                                                                                <td><?= $this->Number->format($accion_sol->id) ?></td>
                                                                                <td>
                                                                                    <?= $accion_sol->has('accion') ? $this->Html->link($accion_sol->accion->descripcion, ['controller' => 'Accions', 'action' => 'view', $accion_sol->accion->id]) : '' ?>
                                                                                </td>
                                                                               
                                                                                <td><?= h($accion_sol->fecha) ?></td>
                                                                               
                                                                                <td class="actions">
                                                                                    <?= $this->Html->link('', ['action' => 'responderSolicitud', $accion_sol->id], ['title' => __('Responder'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                                                                </td>
                                                                            </tr>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                               
                                                                <?php } ?>

                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="profile">
                                                                <table class="table table-striped" cellpadding="0" cellspacing="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?= $this->Paginator->sort('codigo','Código'); ?></th>
                                                                            <th><?= $this->Paginator->sort('descripcion','Descripción'); ?></th>
                                                                            <th><?= $this->Paginator->sort('fecha'); ?></th>
                                                                            <th class="actions"><?= __('Acceso Directo'); ?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($accions_sin_responder_entidades as $accion_sin_resp_min): ?>
                                                                        <tr>
                                                                            <td><?= h($accion_sin_resp_min->codigo) ?></td>
                                                                            <td><?= h($accion_sin_resp_min->descripcion) ?></td>
                                                                            <td><?= h($accion_sin_resp_min->fecha) ?></td>
                                                                            
                                                                            <td class="actions">
                                                                                <?= $this->Html->link('', ['controller'=>'Accions','action' => 'view', $accion_sin_resp_min->id], ['title' => __('Ver'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>               
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="Consolidado">
                                                                
                                                                
                                                                    <div class="row panel panel-default">
                                                                    <div class = "panel-heading">
                                                                      <h4> Recomendaciones por Estado</h4 >
                                                                   </div>                                                               
                                                                   <div id="CharRecomendaciones" class="row panel-body"></div>
                                                                   </div>
                                                               
                                                                   <div class="row panel panel-default">
                                                                    <div class = "panel-heading">
                                                                      <h4> Cumplimiento de Solicitudes</h4 >
                                                                   </div>                                                               
                                                                   <div id="CharSolicitudes" class="row panel-body">
                                                                       
                                                                   </div>
                                                               </div>
                                                            </div>
                                                          
                                                          </div>

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
        <script type="text/javascript">
            var dataRecomendaciones = new Array();
            var listRecomendacionsPie = <?php echo json_encode($listRecomendacionsPie) ?>;

           for(var item in listRecomendacionsPie) {
                obj = {
                        name: listRecomendacionsPie[item]["descripcion"], 
                        y: parseFloat(listRecomendacionsPie[item]["porcentaje"])
                      };
                dataRecomendaciones.push(obj);
            }
            
           $(function () {
            $('#CharRecomendaciones').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: ''
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: dataRecomendaciones
                }]
            });
        });
        </script>

         <script type="text/javascript">
            
            var listSolictudTacomentro = <?php echo json_encode($listSolictudTacomentro) ?>;

    $(function () {
         var gaugeOptions = {

        chart: {
            type: 'solidgauge'
        },

        title: 'Titulo',

        pane: {
            center: ['50%', '85%'],
            size: '140%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.1, '#DF5353'], // red
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#55BF3B'] // green
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };

    $('#CharSolicitudes').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: parseFloat(listSolictudTacomentro[0]['Total']),
            title: {
                text: ''
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Solicitudes',
            data: [parseFloat(listSolictudTacomentro[0]['Ejecutados'])],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}/'+listSolictudTacomentro[0]['Total']+'</span><br/>' +
                       '<span style="font-size:12px;color:silver">Solicitudes</span></div>'
            },
            tooltip: {
                valueSuffix: ''
            }
        }]

    }));

     });

        </script>
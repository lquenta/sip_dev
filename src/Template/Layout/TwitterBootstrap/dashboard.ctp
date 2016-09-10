

<style type="text/css">
body{
    margin-top: -50px;
}
    .navbar{
        background: #438eb9;        
    }
</style>
<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;
$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
$this->start('tb_body_start');
?>
<?=$this->Html->css('font-awesome/4.2.0/css/font-awesome.min');?>

<!-- page specific plugin styles -->

<!-- text fonts -->
<?=$this->Html->css('fonts/fonts.googleapis.com');?>


<!-- ace styles -->
<?=$this->Html->css('ace.min',['class'=>'ace-main-stylesheet','id'=>'main-ace-style']);?>

<!--[if lte IE 9]>
    <link rel="stylesheet" href="/css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->

<!--[if lte IE 9]>
  <link rel="stylesheet" href="/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<?=$this->Html->script('ace-extra.min.js');?>
<?=$this->Html->script('jquery/jquery');?>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="/js/html5shiv.min.js"></script>
<script src="/js/respond.min.js"></script>
<![endif]-->
      <body class="no_skin" <?= $this->fetch('tb_body_attrs') ?>>
       <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
               

                <div class="navbar-header pull-left">
                    
                        <div class="navbar-brand">
                             <?=$this->Html->image('imgpsh_fullsize.png', ['class' => 'msg-photo','style'=>'height:150px']);?>
                            
                        </div>
                    
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <?=$this->Html->image('avatars/user.jpg', ['class' => 'msg-photo']);?>
                                <span class="user-info">
                                    <small>Bienvenido,</small>
                                    <?= $this->request->session()->read('Auth.User.nombre_usuario')?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Ajustes
                                    </a>
                                </li>

                                <li>
                                    <a href="profile.html">
                                        <i class="ace-icon fa fa-user"></i>
                                        Perfil
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?= $this->Url->build(["controller" => "Users","action" => "logout"]); ?>">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Salir
                                    </a>
                                </li>
                            </ul>
                          
        
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "comites","action" => "index"]); ?>">
                                        Comités
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "mecanismos","action" => "index"]); ?>">
                                        Mecanismos
                                    </a>
                                </li>
                                <li class="list-group-item"> 
                                    <a href="<?= $this->Url->build(["controller" => "indicadors","action" => "index"]); ?>">
                                        Indicadores
                                    </a>
                                </li>                                
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "users","action" => "index"]); ?>">
                                        Usuarios
                                    </a>
                                </li>                                
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "rols","action" => "index"]); ?>">
                                        Roles
                                    </a>
                                </li>                                
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "Derechos","action" => "index"]); ?>">
                                        Derechos
                                    </a>
                                </li>                                
                                <li class="list-group-item">
                                    <a href="<?= $this->Url->build(["controller" => "poblacions","action" => "index"]); ?>">
                                        Población
                                    </a>
                                </li>                                
                                <li class="list-group-item"> 
                                    <a href="<?= $this->Url->build(["controller" => "institucions","action" => "index"]); ?>">
                                        Instituciones
                                    </a>
                                </li>                                
                              </ul>
                            </li>
                          

                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container --> 
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

         <!--    <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

               

                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="<?= $this->Url->build(["controller" => "Pages","action" => "display","home"]); ?>">
                            
                            <span class="menu-text"> Panel de Control </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= $this->Url->build(["controller" => "Recomendacions","action" => "add"]); ?>">
                            
                            <span class="menu-text"> Nueva Recomendación</span>
                        </a>
                    </li>
                        <li class="">
                        <a href="<?= $this->Url->build(["controller" => "Recomendacions","action" => "index"]); ?>">
                            
                            <span class="menu-text"> Nueva acción de seguimiento</span>
                        </a>
                    </li>
                        
                    <li class="">
                        <a href="<?= $this->Url->build(["controller" => "SolicitudInformacions","action" => "add"]); ?>">
                            
                            <span class="menu-text"> Nueva Solicitud de informacion</span>
                        </a>
                    </li>
                    

                    

                    

                </ul> --><!-- /.nav-list

                <hr>

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div> -->

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?= $this->Url->build(["controller" => "Pages","action" => "display","home"]); ?>">Inicio</a>
                            </li>
                            <li class="active"><?=$this->fetch('title'); ?></li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>

                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                            </select>
                                        </div>
                                        <span>&nbsp; Choose Skin</span>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                        <label class="lbl" for="ace-settings-add-container">
                                            Inside
                                            <b>.container</b>
                                        </label>
                                    </div>
                                </div><!-- /.pull-left -->

                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                        <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                        <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                    </div>
                                </div><!-- /.pull-left -->
                            </div><!-- /.ace-settings-box -->
                        </div><!-- /.ace-settings-container -->

                        

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <?php
                                /**
                                 * Default `flash` block.
                                 */
                                if (!$this->fetch('tb_flash')) {
                                    $this->start('tb_flash');
                                    if (isset($this->Flash))
                                        echo $this->Flash->render();
                                    $this->end();
                                }
                                $this->end();

                                $this->start('tb_body_end');
                                echo '</body>';
                                $this->end();

                                $this->append('content', '</div></div></div>');
                                echo $this->fetch('content');
                                ?>
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">SIPLUS</span>
                            Bolivia &copy; 2016
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->


        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="../js/excanvas.min.js"></script>
        <![endif]-->
        <?=$this->Html->script('jquery-ui.custom.min');?>
        <?=$this->Html->script('jquery.ui.touch-punch.min');?>
        <?=$this->Html->script('jquery.easypiechart.min');?>
        <?=$this->Html->script('jquery.sparkline.min');?>
        <?=$this->Html->script('jquery.flot.min');?>
        <?=$this->Html->script('jquery.flot.pie.min');?>
        <?=$this->Html->script('jquery.flot.resize.min');?>
        <?=$this->Html->script('ace-elements.min');?>
        <?=$this->Html->script('ace.min');?>
        <?=$this->Html->script('highcharts');?>
        <script src="http://code.highcharts.com/highcharts-more.js"></script>
        <script src="http://code.highcharts.com/modules/solid-gauge.js"></script>
    

        <!-- inline scripts related to this page -->
       
    </body>
</html>

<script>
    $("#ace-settings-container").hide();
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESE | Coordinador</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css1/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css1/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css1/_all-skins.min.css')}}"> 
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>REV</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ESE</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Usuario</small>
                  <span class="hidden-xs">Ejemplo de nombre</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      jaz.jcm1@gmail.com - Desarrollando Software
                    </p>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{route('Cerrarsesion')}}">Cerrar sesión</a></li>                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview"><a href="#"><i class="fa fa-qrcode"></i>
                <span>Inicio</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/layouts/perfil"><i class="fa fa-circle-o"></i> Ver Perfil</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Editar Perfil</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-child"></i>
                <span>Coordinadores</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="/revolution/coordinador/"><i class="fa fa-circle-o"></i> Ver coordinadores</a></li>
                <li><a href="/revolution/coordinador/create"><i class="fa fa-circle-o"></i> Agregar Nuevo</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i>
                <span>Reclutadores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/revolution"><i class="fa fa-circle-o"></i> Ver Reclutadores</a></li>
                <li><a href="/revolution"><i class="fa fa-circle-o"></i> Agregar Nuevo</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i>
                <span>Analistas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/revolution/analista/"><i class="fa fa-circle-o"></i> Ver Analistas</a></li>
                <li><a href="/revolution/analista/create"><i class="fa fa-circle-o"></i> Agregar Nuevo</a></li>
                <li><a href="/revolution"><i class="fa fa-circle-o"></i> Solicitar ESE</a></li>
                <li><a href="/revolution"><i class="fa fa-circle-o"></i> Ver Reportes</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Empresas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/revolution/empresa/"><i class="fa fa-circle-o"></i>Ver Empresas</a></li>
                <li><a href="/revolution/empresa/create"><i class="fa fa-circle-o"></i>Agregar Nuevo</a></li>
                <li><a href="/revolution/empleado/"><i class="fa fa-circle-o"></i>Empleados</a></li>
                <li >
                  <a href="/revolution/coordinador/create"><i class="fa fa-circle-o"></i> Solicitudes</a>
                  <ul class="treeview-menu">
                      <li class="active"><a href="/revolution/peticion/"><i class="fa fa-eye""></i> Ver Solicitudes</a></li>
                      <li><a href="/revolution"><i class="fa fa-pencil-square-o"></i>Repartir Solicitudes</a></li>
                  </ul>    
                </li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Reportes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-area-chart"></i>Reporte Global</a></li>
                
              </ul>
            </li>                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Estudios SocioEconómicos</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              @yield('contenido')
                              <!--<h3>Contenido</h3>-->
                              <!--Fin Contenido-->
                           </div>
                        </div>
                        
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="https://www.hr-revolution.com.mx/">HR-Revolution Head Hunting</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js2/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js2/app.min.js')}}"></script>
    
  </body>
</html>

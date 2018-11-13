<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESE | Cliente</title>
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
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>REV</b></span>
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

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">{{ auth()->user()->rol }}</small>
                  <span class="hidden-xs">
                    @if (isset($datos))
                      {{$datos->Nombre}}
                    @else
                      Nombre
                    @endif
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      @if (isset($datos))
                        {{ auth()->user()->email }} - {{$datos->Nombre}}
                        {{$datos->Papp}}
                        {{$datos->Sapp}}
                      @else
                        {{ auth()->user()->email }} - Desarrollo
                      @endif
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('Cerrarsesion') }}">Cerrar sesión</a></li>
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
            
            <?php $procedencia='cliente'; ?>
            <li class="treeview"><a href="#"><i class="fa fa-qrcode"></i>
                <span>Inicio</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ route('cliente') }}"><i class="fa fa-circle-o"></i> Ver Perfil</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Editar Perfil</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-child"></i>
                <span>Empleados</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{URL::action('EmpleadoController@index',array('procedencia'=>$procedencia))}}"><i class="fa fa-circle-o"></i> Ver Empleados</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i>
                <span>Solicitudes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL::action('PeticionController@index',array('procedencia'=>$procedencia))}}"><i class="fa fa-circle-o"></i>Ver Solicitudes mandadas</a></li>
                <li><a href="{{URL::action('PeticionController@create')}}"><i class="fa fa-circle-o"></i>Pedir Nueva Solicitud</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Ver Reportes</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Generar Reporte</a></li>
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

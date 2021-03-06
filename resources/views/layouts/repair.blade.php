
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VASUS Tech Support</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a class="logo"  data-toggle="push-menu">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/storage/images/logo2.jpg" class="img-circle" id="logo" height="45" width="45"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="/storage/images/vasus2.jpg" id="logo" width="200"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" id="topbar-a" data-toggle="dropdown">
              <span >{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer" >
                <div class="pull-left">
                  <a href="/repair/account" class="btn btn-default btn-flat">Account</a>
                </div>
                <div class="pull-right">
                  <a href="/repair/logout" class="btn btn-default btn-flat">Sign out</a>
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



      <!-- Sidebar Menu -->
     
      <ul class="sidebar-menu" data-widget="tree">
          <!-- Optionally, you can add icons to the links -->

 
          <li class="{{Request::is('repair/repairs') ? 'active' : ''}}"><a href="/repair/repairs"><i class="fa fa-briefcase"></i> <span>Repairs</span></a></li>
         
         

            <li class="{{Request::is('repair/inventory') || Request::is('repair/inventory/orders') || Request::is('repair/inventory/requests')  ? 'active' : ''}} treeview" >
                <a href="#"><i class="fa fa-archive"></i> <span>Inventory</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li class="{{Request::is('repair/inventory') ? 'active' : ''}}"><a href="/repair/inventory"><i class=></i>Components</a></li>
                  <li class="{{Request::is('repair/inventory/orders') ? 'active' : ''}}"><a href="/repair/inventory/orders"><i class=></i>Orders</a></li>
                  <li class="{{Request::is('repair/inventory/requests') ? 'active' : ''}}"><a href="/repair/inventory/requests"><i class=></i>Requests</a></li>
                </ul>
              </li>


              <li class="{{Request::is('repair/account') ? 'active' : ''}}"><a href="/repair/account"><i class="fas fa-user"></i>  <span>Account</span></a></li>
          <li><a href="/repair/logout"><i class="fas fa-sign-out-alt"></i>  <span>Logout</span></a></li>
        </ul>
   

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
   
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

  @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
   
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->

      
       
        
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- AdminLTE App -->



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
    
</body>
</html>
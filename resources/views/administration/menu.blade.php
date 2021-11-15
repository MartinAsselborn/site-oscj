<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html class="wide wow-animation" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OSCJ</title> 
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('LTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('LTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" defer></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
  <style>
    .table-dark{
      background: #2057A4;
     border-radius:20px 0 0px 0px;
    }
   .sorting_1 {
      background: #2057A4 !important;
      
   }
   tr{
     border-radius:20px 0 0px 0px;
   }

   tr td{
      background: #2057A4;
      
   }

    .brand-link {
      border-bottom: 1px solid white !important;
    }
   .user-panel {
    color:white!important;
    border-bottom: 1px solid white !important;
   }
   .d-block {
      color:white!important;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <!--form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form-->


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#2057A4 !important;">
    <!-- Brand Logo -->
    <a href="/administracion" class="brand-link" >
      <img src="{{asset('LTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <i class="fa  fa-id-card  fa-2x"></i>
        </div>
        <div class="info">
          <a href="/legajos" class="d-block">Legajos</a>
        </div>
      </div>


      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fa fa-user-o fa-2x"></i>

          <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
          <a href="/usuarios" class="d-block">Usuarios</a>
        </div>
      </div>
      <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fas fa-address-book fa-2x"></i>
        <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <!--form action="/logout" method="GET">
         <button type="submit" class="d-block">LOGOUT</button>
        </form-->
          <a href="/planes" class="d-block">Planes</a>
        </div>
      </div>
      <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fas fa-newspaper fa-2x"></i>
        <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <!--form action="/logout" method="GET">
         <button type="submit" class="d-block">LOGOUT</button>
        </form-->
          <a href="/noticias" class="d-block">Noticias</a>
        </div>
      </div>
      <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fas fa-align-left fa-2x"></i>
        <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <!--form action="/logout" method="GET">
         <button type="submit" class="d-block">LOGOUT</button>
        </form-->
          <a href="/webtext" class="d-block">Textos Web</a>
        </div>
      </div>
      <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fa fa-picture-o fa-2x"></i>
        <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <!--form action="/logout" method="GET">
         <button type="submit" class="d-block">LOGOUT</button>
        </form-->
          <a href="/imagenesWeb" class="d-block">Imagenes Web</a>
        </div>
      </div>
      <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fas fa-door-open fa-2x"></i>
        <!--img src="LTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <!--form action="/logout" method="GET">
         <button type="submit" class="d-block">LOGOUT</button>
        </form-->
          <a href="/logout" class="d-block">Logout</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="">
      </div>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            @yield('contenido')

    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      {{-- Anything you want --}}
    </div>
    <!-- Default to the left -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('LTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('LTE/dist/js/adminlte.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#table').DataTable();
    } );

  </script>
</body>
</html>

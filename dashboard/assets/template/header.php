<?php 
  session_start();
  if(isset($_SESSION['estatus'])){
    if((($_SESSION['estatus'])=='2')){
      header('Location: ../../../index.php');
    }
  }else{
    header('Location: ../../../index.php'); 
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard | CECYTEG Comonfort</title>
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!------->
  <link rel="stylesheet" href="../../assets/plugins/sweetAlert2/sweetalert2.min.css">      
  <link rel="stylesheet" href="../../assets/plugins/animate.css/animate.css">  
  <!-- ESTILO DE DATA TABLE 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> -->  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--Icon-->
  <link rel="shortcut icon" href="../../assets/img/favicon.png">  
  <!-- ESTILO VALIDACIONES--> 
  <!--<link rel="stylesheet" href="../css/validate/validate.css">  
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
  <link rel="stylesheet" href="../css/asterisco.css">
  <!-- ESTILO DEL DATE PICKER-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css"/>  
  <style>
    .obligatorio::after { content: '*'; color: red; margin-left:2px }
    label.error { font-family:Arial,Helvetica,sans-serif;font-size:small;color: darkred;display: block;margin-top: 5px;}
    input.error { border: 1px solid red; font-weight: 300; color: red; }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
      


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php //echo $_SESSION['nombre_usuario'];?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="../../../logout.php">Cerrar Sesión</a>
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../cpanel.php" class="brand-link">
      <img src="../../assets/img/gears.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CPANEL</span><br>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../assets/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../../index.php" class="d-block">
      
         Administrador
        
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Módulos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="../../modules/alumnos/index.php" class="nav-link">
                <i class="fas fa-users"></i>
                  <p>Alumnos</p>
                </a>
                <?php if(isset($_SESSION['privilegios'])){
                  if((($_SESSION['privilegios'])!='3')){ ?>
                    <a href="../../modules/usuarios/index.php" class="nav-link">
                    <i class="fas fa-users"></i>
                      <p>Usuarios</p>
                    </a>
                    <a href="../../modules/periodos/index.php" class="nav-link">
                    <i class="fas fa-calendar"></i>
                      <p>Períodos Escolares</p>
                    </a>
                  <?php 
                  }                  
                }?>
              </li>

            

            </ul>
          </li>
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">CPANEL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CPANEL</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
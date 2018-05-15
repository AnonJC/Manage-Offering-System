<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title> Manage Offering | System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="public/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/template/bootstrap/font-awesome-4.6.3/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/template/bootstrap/ionicons-2.0.1css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/template/dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/template/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="public/JhuneCarlo.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="app/imgfavicon.png" >

  <!-- This is what you need -->
  <script src="public/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="public/dist/sweetalert.css">
  <!--.......................-->
</head>
<?php include "database/databaseconnection.php"; 
  $offeringno = $_GET['offeringno'];
?>

<body class="hold-transition skin-red layout-boxed sidebar-mini">
<div class="wrapper">
  <!-- Header -->
  <header class="main-header">

      <!-- Logo -->
      <a href="homepage.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b>OS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> Manage Offering System </span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="public/template/dist/img/admin.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"> Jhune Carlo Trogelio </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="public/template/dist/img/admin.jpg" class="img-circle" alt="User Image">

                  <p>
                    Jhune Carlo Trogelio
                    <small>MNKYDevTeam - Web Developer</small>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="index.php" class="btn btn-info btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
  </header>

  <!-- Sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="public/template/dist/img/admin.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Jhune Carlo Trogelio</p>
            <a href="#"><i class="fa fa-circle text-success"></i> System Administrator</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>


          <li>
            <a href="homepage.php">
              <i class="glyphicon glyphicon-home"></i> <span>Homepage</span>
            </a>
          </li>

          <li>
              <a href="#">
                <i class="fa fa-table"></i> <span>Manage Offering</span>
              </a>

            <ul class="treeview-menu">
              <li><a href="dataupload.php"><i class="fa fa-file-text"></i> Upload Offering</a></li>
              <li class="active"><a href="dataupdate.php"><i class="glyphicon glyphicon-list-alt"></i> Update Offering</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
            Manage Offering 
            <small>Sub-System</small>
          </h1>               
        <ol class="breadcrumb">
          <li><a href="homepage.php"><i class="fa fa-home"></i>Homepage</a></li>
          <li class="active">Manage Offering</li>
          <li class="active">Updatepage</li>
        </ol>
        <br>
      </section>



     <section id="skeptable" class="container bg-primary" style="padding:20px;">
         <div class="login-box">
           <div class="login-logo">
              <h2 class="text-danger"><strong>Manage Offering </strong> </h2>
              <h3 class="text-info">Sub - System </h3>
           </div> 
             
           
           <!-- /.login-logo -->
           <div class="login-box-body">
             <p class="login-box-msg">Confirmation Message: </p>
                   <label>Are you sure to delete offering</label>
               <br>
               <hr class="btn-danger">
               <a href="homepage.php" class="btn btn-danger btn-flat" role="button">Cancel</a>
               <a href="delete.php?offeringno=<?php echo $offeringno; ?>" class="btn btn-success" role="button"><i class="glyphicon glyphicon-trash"></i>Delete</a>
           </div>
           <!-- /.login-box-body -->
         </div>
      </section>
    </div>

  <!-- Footer -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2016 <a href="http://MNKYDevTeam.ph">MNKYDevTeam</a>.</strong> All rights
      reserved.
    </footer>
</div>




<!-- jQuery 2.2.3 -->
<script src="public/template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="public/template/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="public/template/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="public/template/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="public/template/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="public/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="public/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="public/template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="public/template/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/template/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/template/dist/js/demo.js"></script>
</body>
</html>

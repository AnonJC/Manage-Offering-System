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

  <!-- JavaScript of time picker -->
  <link type="text/css" href="public/bootstrap.timepicker/css/bootstrap-timepicker.min.css" />
  <script type="text/javascript" src="public/bootstrap.timepicker/js/bootstrap-timepicker.min.js"></script>


  <link rel="shortcut icon" href="favicon.png" >
  <link rel="stylesheet" type="text/css" href="public/clockpicker/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/clockpicker/dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="public/clockpicker/assets/css/github.min.css">

  <link rel="shortcut icon" href="app/imgfavicon.png" >
</head>

<?php include "database/databaseconnection.php";

$offeringno = $_GET['offeringno'];

$queryEdit = "SELECT * FROM sis.offering WHERE offeringno = '$offeringno'";
$result = pg_query($queryEdit);

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
                    <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
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
              <li class="active"><a href="dataupload.php"><i class="fa fa-file-text"></i> Upload Offering</a></li>
              <li><a href="dataupdate.php"><i class="glyphicon glyphicon-list-alt"></i> Update Offering</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

       <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header ">
          <h1>
            Manage Offering 
            <small>Sub-System</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="homepage.php"><i class="fa fa-home"></i>Homepage</a></li>
            <li class="active">Manage Offering</li>
            <li class="active">Upload Data</li>
          </ol>
          <br>
        </section>


      <section id="skeptable" class="content">
          <!-- Code Here -->
        <div style="margin-left:17%; margin-right: 10%;">
          <div style="width: 90%;" class=" box box-solid box-danger control-label box">
            <div class="box-header with-border ">
              <h2 class="box-title">Updating Data</h2>
            </div>
              <form action="updaterecord.php" method="POST" style="margin-top:20px">
              <?php
                  while ($row = pg_fetch_assoc($result)) {
              ?>
                <div class="col-sm-6">
                    <input type="hidden" name="offeringno" value="<?php echo $row['offeringno']; ?>">
                    <div class="form-group ">
                        <label>Faculty Name</label>
                        <?php
                         $faculty = $row['facultyid'];
                         $queryfaculty = "SELECT facultyid, firstname, lastname, mi FROM sis.faculty WHERE facultyid = '$faculty'";
                         $specifiedfaculty = pg_query($queryfaculty);
                         while($specifiedfaculty=pg_fetch_array($specifiedfaculty)){
                      ?>
                            <select class="form-control select2 " style="width: 100%;" name="faculty" required="">
                              <option value="<?php echo $specifiedfaculty['facultyid']; ?>"><?php echo $specifiedfaculty['lastname'] . ", " . $specifiedfaculty['firstname'] . " " . $specifiedfaculty['mi']; ?></option>
                              <?php
                              }
                               $querylist = "SELECT facultyid, firstname, lastname, mi FROM sis.faculty";
                               $listresult = pg_query($querylist);
                                  while($row_list=pg_fetch_array($listresult))
                                  {
                                      printf ("<option value=%s>%s, %s %s</option>", $row_list[0], htmlspecialchars($row_list[2]), htmlspecialchars($row_list[1]), htmlspecialchars($row_list[3]));
                                  }
                               ?>
                            </select>

                    </div>
                    <div class="form-group ">
                     <label>Subject</label>
                     <?php
                         $subject = $row['subjectid'];
                         $querysubject = "SELECT subjectid, subjectname, descriptivetitle FROM sis.subject WHERE subjectid = '$subject'";
                         $specifiedsubject = pg_query($querysubject);
                         $specifiedsubject=pg_fetch_array($specifiedsubject) ?>
                         <input type="text" name="subject" class="form-control" value="<?php echo $specifiedsubject['subjectname'] . " - " . $specifiedsubject['descriptivetitle']; ?>" disabled="">
                    </div>
                    <div class="form-group ">
                     <label>Room</label>
                     <?php
                         $room = $row['roomid'];
                         $queryroom = "SELECT roomid, roomno FROM sis.room WHERE roomid = '$room'";
                         $specifiedroom = pg_query($queryroom);
                         while($specifiedroom=pg_fetch_array($specifiedroom)){
                      ?>
                         <select class="form-control select2 " style="width: 100%;" name="room" required="">
                           <option value="<?php echo $specifiedroom['roomid']; ?>"><?php echo $specifiedroom['roomno']; ?></option>
                           <?php
                          }
                            $querylist = "SELECT roomid, roomno FROM sis.room";
                            $listresult = pg_query($querylist);
                               while($row_list=pg_fetch_array($listresult))
                               {
                                   printf ("<option value=%s>%s</option>", $row_list[0], htmlspecialchars($row_list[1]));
                               }
                            ?>
                         </select>
                    </div>
                    <div class="form-group ">
                     <label>School Year & Semester</label>
                     <?php
                         $syearid = $row['syearid'];
                         $querysyearid = "SELECT * FROM sis.schoolyear WHERE syearid = '$syearid'";
                         $specifiedsyearid = pg_query($querysyearid);
                         while($specifiedsyearid=pg_fetch_array($specifiedsyearid)){
                      ?>
                         <select class="form-control select2 " style="width: 100%;" name="syearid" required="">
                           <option value="<?php echo $specifiedsyearid['syearid']; ?>"><?php echo $specifiedsyearid['schooyear'] . " & " . $specifiedsyearid['semester']; ?></option>
                           <?php
                          }
                            $querylist = "SELECT * FROM sis.schoolyear ORDER BY syearid";
                            $listresult = pg_query($querylist);
                               while($row_list=pg_fetch_array($listresult))
                               {
                                   printf ("<option value=%s>%s %s</option>", $row_list[0], htmlspecialchars($row_list[1]), htmlspecialchars($row_list[2]));
                               }
                            ?>
                         </select>
                    </div>
                    <div class="form-group">
                       <label>Section</label>
                       <input type="text" name="section" class="form-control" value="<?php echo $row['section']; ?>" required="">
                    </div>
                    <div class="form-group">
                       <label>Slots</label>
                       <input type="number" name="slots" class="form-control" value="<?php echo $row['slots']; ?>" required="">
                    </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Lecture Start</label>
                     <div class="input-group clockpicker">
                       <input type="text" class="form-control" value="<?php echo date('h:i A', strtotime($row['lecturestart'])); ?>" name="lecturestart" placeholder="Time" required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                      $('.clockpicker').clockpicker();
                    </script>
                </div>
                <div class="form-group">
                  <label>Lecture End</label>
                     <div class="input-group clockpicker">
                       <input type="text" class="form-control" value="<?php echo date('h:i A', strtotime($row['lectureend'])); ?>" name="lectureend" placeholder="Time" required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                      $('.clockpicker').clockpicker();
                    </script>
                </div>
                <div class="form-group">
                  <label>Lecture Days</label>
                  <input type="text" name="lecturedays" class="form-control" value="<?php echo $row['lecturedays']; ?>" placeholder="lecture days" required="">
                </div>
                <?php 
                if($row['labstart'] != NULL && $row['labend'] != NULL && $row['labdays'] != NULL) { ?> 
                <div class="form-group">
                  <label>Lab Start</label>
                     <div class="input-group clockpicker">
                       <input type="text" class="form-control" value="<?php echo date('h:i A', strtotime($row['labstart'])); ?>" name="labstart" placeholder="Time" required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                      $('.clockpicker').clockpicker();
                    </script>
                </div>
                <div class="form-group">
                  <label>Lab End</label>
                     <div class="input-group clockpicker">
                       <input type="text" class="form-control" value="<?php echo date('h:i A', strtotime($row['labend'])); ?>" name="labend" placeholder="Time" required="" >
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                      $('.clockpicker').clockpicker();
                    </script>
                </div>
                <div class="form-group">
                  <label>Lab Days</label>
                  <input type="text" name="labdays" class="form-control" value="<?php echo $row['labdays']; ?>" placeholder="lab days" required="">
                </div> 
                <?php
                  }
                else
                {
                  echo '<input type="hidden" name="labstart" value="">';
                  echo '<input type="hidden" name="labend" value="">';
                  echo '<input type="hidden" name="labdays" value="">';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                  echo '<br>';
                }
                ?>
              </div>
	<br>
	<br>
	<br>
	<br>

              <button type="submit" class="btn btn-danger btn-flat btn-block" style="width:30%; margin-left:34%">Update Offering</button>
              <?php } ?>
              </form>

              <br>
              
              <div class="box-footer">
                  Before uploading records, it must or shall be presented and approved by the OVCAA, by the Dean of the
                  college and the Vice Chancellor.
              </div>
          </div>
        </div>

      </section>



        <!-- Footer -->
    </div>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2016 <a href="http://MNKYDevTeam.ph">MNKYDevTeam</a>.</strong> All rights
      reserved.
    </footer>



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



<script type="text/javascript" src="public/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
  .find('input').change(function(){
    console.log(this.value);
  });
var input = $('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'
});



// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
  $('input').prop('readOnly', true);
}
</script>

<script type="text/javascript" src="public/clockpicker/assets/js/highlight.min.js"></script>
<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>

</body>
</html>

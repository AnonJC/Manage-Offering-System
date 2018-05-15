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
</head>
<body>


<?php

include "database/databaseconnection.php";

$faculty = pg_escape_string($_POST['faculty']);
$subject = pg_escape_string($_POST['subject']);
$room = pg_escape_string($_POST['room']);
$syearid = pg_escape_string($_POST['syearid']);
$section = pg_escape_string($_POST['section']);
$slots = pg_escape_string($_POST['slots']);
$lecturestart = pg_escape_string($_POST['lecturestart']);
$lectureend = pg_escape_string($_POST['lectureend']);
$lecturedays = pg_escape_string($_POST['lecturedays']);



if(pg_escape_string($_POST['labstart']) == NULL && pg_escape_string($_POST['labend']) == NULL && pg_escape_string($_POST['labdays']) == NULL)
{
  $query = "INSERT INTO sis.offering(lecturestart, lectureend, lecturedays, section, slots, facultyid, roomid, syearid, subjectid)
            VALUES(time '$lecturestart', time '$lectureend', '$lecturedays', '$section', $slots, '$faculty', $room, $syearid, $subject)";
  $result = pg_query($query);

  if (!$result)
  {
      echo '<div class="alert alert-danger alert-dismissable" id="flash-msg" style="margin-top: 10%; margin-left: 15%; margin-right: 15%;">
        <h4 style="text-align: center"><i class="icon fa fa-check"></i>Failed to insert data! check your input.. </h4>
        <br>
        <a href="dataupload.php" class="btn btn-danger" alt="" style="margin-left: 47%;"data-toggle="modal" data-target="#updatemodal"><i>Back</i></a>
        </div>';
  }else{
    echo '<div class="alert alert-success alert-dismissable" id="flash-msg" style="margin-top: 10%; margin-left: 15%; margin-right: 15%;">
        <h4 style="text-align: center"><i class="icon fa fa-check"></i>Successfully committed to database!</h4>
        <br>
        <a href="homepage.php" class="icon fa fa-check btn btn-success" alt="" style="margin-left: 47%;"data-toggle="modal" data-target="#updatemodal"><i>Done</i></a>
        </div>';
 }
 pg_close();
}  
else{
  $labstart = pg_escape_string($_POST['labstart']);
  $labend = pg_escape_string($_POST['labend']);
  $labdays = pg_escape_string($_POST['labdays']);

  $query = "INSERT INTO sis.offering(lecturestart, lectureend, labstart, labend, lecturedays, labdays, section, slots, facultyid, roomid, syearid, subjectid)
              VALUES(time '$lecturestart', time '$lectureend', time '$labstart', time '$labend', '$lecturedays', '$labdays', '$section', $slots, '$faculty',
              $room, $syearid, $subject)";
    $result = pg_query($query);
    if (!$result)
    {
        echo '<div class="alert alert-danger alert-dismissable" id="flash-msg" style="margin-top: 10%; margin-left: 15%; margin-right: 15%;">
          <h4 style="text-align: center"><i class="icon fa fa-check"></i>Failed to insert data! check your input.. </h4>
          <br>
          <a href="dataupload.php" class="btn btn-danger" alt="" style="margin-left: 47%;"data-toggle="modal" data-target="#updatemodal"><i>Back</i></a>
          </div>';
    }else{
      echo '<div class="alert alert-success alert-dismissable" id="flash-msg" style="margin-top: 10%; margin-left: 15%; margin-right: 15%;">
          <h4 style="text-align: center"><i class="icon fa fa-check"></i>Successfully committed to database!</h4>
          <br>
          <a href="homepage.php" class="icon fa fa-check btn btn-success" alt="" style="margin-left: 47%;"data-toggle="modal" data-target="#updatemodal"><i>Done</i></a>
          </div>';
   }
   pg_close();
}

?>

</body>
</html>


















































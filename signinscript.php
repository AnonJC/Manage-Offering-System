<!DOCTYPE html>
<html>
<head>

</head>
<body>

  <?php
    session_start();
    $counter=0;

    $get_username = pg_escape_string($_POST['adminName']);
    $get_psw = pg_escape_string($_POST['adminpsw']);


    if($get_username == "admin" && $get_psw == "admin"){
    $counter = 1;
    }

      if($counter == 0){

        die(header("location: index.php?loginFailed=true&reason=incorrect_details"));
      }else{
        header("location: homepage.php", true, 301);
        exit();
      }
  ?>

</body>
</html>

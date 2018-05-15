<?php
  $db = pg_connect("host=localhost dbname=sis port=5432 user=postgres password=postgres");
  if(!$db){
     echo "Error : Unable to open database\n";
  }
?>

<?php

$hostname ='localhost';
$username ='root';
$password = '';
$databasename = 'demo';

$mysqli = mysqli_connect($hostname, $username, $password, $databasename);

  if($mysqli === false)
  {
    // echo "connect success";
    die("error : could not connect" . mysqli_connect_error());
  }
  else
   echo "connect successfully<br>";

?>
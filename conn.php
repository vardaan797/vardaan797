<?php
$link= new mysqli("localhost","u797587998_matkam","Matka@123","u797587998_matkam");

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link-> connect_error;
  exit();
}
date_default_timezone_set("Asia/Kolkata");
?>
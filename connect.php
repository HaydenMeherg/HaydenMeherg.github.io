<?php
$connection = mysqli_connect('localhost', 'meherghl', 'Topper', 'meherghl');
if (!$connection){
  die("Database Connection Failed" . mysqli_error($connection));
}

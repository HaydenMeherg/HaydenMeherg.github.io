<?php
$conn = mysqli_connect('localhost', 'meherghl', 'Topper', 'meherghl');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($conn, 'meherghl');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}


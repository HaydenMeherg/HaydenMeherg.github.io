<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:Login.php");
}
require 'templates/events.html';
require 'Map.php';
require 'templates/footer.html';
?>
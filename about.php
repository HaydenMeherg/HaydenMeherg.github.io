<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:Login.php");
}
require 'templates/about.html';
?>
<br>
<br>
<?php
require 'templates/footer.html';
?>

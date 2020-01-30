<br>
<div class="w3-container w3-center">
    <div class="row">
        <div class="col-lg-12">
<?php
require 'connect.php';
include('templates/header.html');

$email="admin";
$password="admin";

session_start();

if(isset($_SESSION['email'])){
    
    date_default_timezone_set('America/New_York');
    
    
    
}
else {
    if($_POST['email']==$email && $_POST['password']==$password){
        
    $_SESSION['email']=$email;
        
    echo "<script>location.href='welcome.php'</script>";
    }
    else{
        echo "<script>alert(Username or password incorrect!')</script>";
        
        echo "<script>locatin.href='login.php'</script>";
    }
}

define('TITLE', 'Welcome to the 4:19 Fishing Club!');

?>
        </div>
    </div>
</div>
<br>
<div class="w3-container w3-center">
        <div class="row">
            <div class="col-lg-12">
<p>We've successfully recevied your notification and will respond in a timely manner. Thank you for contacting us!</p>
<p><a href="index.php">Home</a></p>
            </div>
    </div>
</div>

<?php
include('templates/footer.html');
?>


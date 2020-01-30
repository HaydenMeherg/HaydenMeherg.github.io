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
    
    echo "<h1>Welcome ".$_SESSION['email']."</h1>";
    echo date("F j, Y, g:i a"); 
    
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
<p>You've successfully logged in and can now take advantage of everything the site has to offer. </p>
<p><a href='index.php'>Home</a></p>
            </div>
    </div>
</div>

<?php
include('templates/footer.html');
?>


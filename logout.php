<?php
session_start();
define('TITLE', '419 Fishing');
include('templates/header.html');
?>

<?php
$_SESSION = ['email'];
//destroy session data on server.
session_destroy();
?>
<br>
<br>
<div class="w3-container w3-center">
        <div class="row">
            <div class="col-lg-12">
<h2>Welcome to the 4:19 Fishing Club</h2>
                
<p> You are logged out.  Thank you for using this site.</p>
            </div>
    </div>
</div>
<?php
include('templates/footer.html');
?>

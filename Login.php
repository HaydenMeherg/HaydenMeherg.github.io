<!--
Into this file, we create a layout for login page.
-->

<?php
require 'templates/login.html';
?>



<div class="container">
        <div class="row">
            <div class="col-lg-12">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>User Login</h1>
    <label for="email">Email:</label>
    <div>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  <div>
    <label for="pwd">Password:</label>
    <div>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div>
    <div>
        <br />
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
                <br>
      <a href="Registration.php">Register</a>
    
        <br>
        <br>
<div class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-xlarge w3-serif">
  <i>"Many men go fishing all of their lives without knowing that it is not fish they are after."</i></p>
  <p>Henry David Thoreau</p>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
require 'templates/footer.html';
?>
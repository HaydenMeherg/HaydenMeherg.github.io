<!--
Into this file, we create a layout for registration page.
-->
<?php
require 'templates/registration.html';
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
<form action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div>
        <br>
    <label for="firstname">First Name:</label>
    <div>
      <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div>
    <label for="lastname">Last Name:</label>
    <div>
      <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div>
    <br>
    <label for="lastname">Gender:</label>
    <div>
      <label><input type="radio" name="gender" value="Male">Male</label>
	  <label><input type="radio" name="gender" value="Female">Female</label>
    </div>
      
  </div>
  <div>
      <br>
    <label for="email">Email:</label>
    <div>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div>
    <label for="pwd">Password:</label>
    <div>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div>
      <br>
    <div>
      <button type="submit" name="create">Submit</button><br />
    </div>
  </div>
</form>
</div>
<br>
<br>
<br>
    </div>
</div>
<br>
<br>
<br>
<?php
require 'templates/footer.html';
?>


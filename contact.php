<!--
Into this file, we create a layout for registration page.
-->
<?php
session_start();
require 'templates/contact.html';
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "meherghl", "Topper", "meherghl") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	}
 
?>
<br>
<?php
require 'templates/footer.html';
?>


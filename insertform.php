<html>
<head>
</head>
<body>
<form action="insertform.php" method="post">
FirstName: <input tpye="text" name="firstname"><br />
LastName: <input tpye="text" name="lastname"><br />
Country: <input tpye="text" name="country"><br />
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

$con = mysqli_connect("localhost","root","test123","registrationdb");

if(!$con)
{
	echo "Database connection faild...";
}

mysqli_select_db("registrationdb", $con);

$sql = "INSERT INTO Members (FirstName, LastName, Country) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[country]')";

mysql_query($sql,$con);

mysql_close($con);
}
?>

</body>
</html>

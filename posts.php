<?php
session_start();

if(!isset($_SESSION['email'])){
   header("Location:Login.php");
}
require 'templates/posts.html';
?>
<html>
<head>
</head>
    
<?php
$conn = new mysqli("localhost","root","password","registrationdb");
//Check Connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['update'])){
$UpdateQuery = "UPDATE Members SET FirstName='$_POST[firstname]', LastName='$_POST[lastname]', Country='$_POST[country]' WHERE FirstName='$_POST[hidden]'";
mysqli_query($conn, $UpdateQuery);
};

if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM Members WHERE FirstName='$_POST[hidden]'";
mysqli_query($conn, $DeleteQuery);
};

if(isset($_POST['add'])){
$AddQuery = "INSERT INTO Members (FirstName, LastName, Country) VALUES ('$_POST[ufirstname]','$_POST[ulastname]','$_POST[ucountry]')";
mysqli_query($conn, $AddQuery);
};



$sql = "SELECT * FROM Members";
$myData = mysqli_query($conn,$sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Members</h1>
                <br>
                <br>
<?php
echo "<table>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Country</th>
</tr>";
while($record = mysqli_fetch_array($myData)){
echo "<form action=posts.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=firstname value='" . $record['FirstName'] . "' </td>";
echo "<td>" . "<input type=text name=lastname value='" . $record['LastName'] . "' </td>";
echo "<td>" . "<input type=text name=country value='" . $record['Country'] . "' </td>";
echo "<td>" . "<input type=hidden name=hidden value='" . $record['FirstName'] . "' </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=posts.php method=post>";
echo "<tr>";
echo "<td><input type=text name=ufirstname></td>";
echo "<td><input type=text name=ulastname></td>";
echo "<td><input type=text name=ucountry></td>";
echo "<td>" . "<input type=submit name=add value=add" . " </td>";
echo "</tr>";
echo "</form>";
echo "</table>";
mysqli_close($conn);
?>
</div>
        </div>
    </div>
    
</html>
<br>
<br>
<br>
<br>
<br>
<?php
include('templates/footer.html');
?>

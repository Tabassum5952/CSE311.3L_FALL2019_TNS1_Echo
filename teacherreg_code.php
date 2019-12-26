

<?php
require_once('connection.php');

$username=$fname=$lname=$institution=$phone=$description=$password='';

$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$institution = $_POST['institution'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO teacher (username,fname,lname,inst,phone ,pass,descrip) VALUES ('$username','$fname','$lname','$institution','$phone','$password','$description')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo '<script type="text/javascript"> alert("Thank You for your registration.")</script>';
	header("Location: index.php");
}
else
{
	echo "Error :".$sql;
}
?>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','sam');
if($con===false){
  echo"NO connection";
}
else{

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// database insert SQL code
$sql = "INSERT INTO sam('name','email','subject','message') VALUES ( $name, $email, $subject, $message)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}
?>

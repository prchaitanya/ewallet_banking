<?php

include 'connection.php';

$vmobileno=$_POST['lmobileno'];
$vpassword=$_POST['lpassword'];


$sql ="select firstname from person where mobileno=$vmobileno and password='$vpassword'";
$result=$conn->query($sql);
if(!$row=mysqli_fetch_assoc($result)) {
	echo "Your mobileno or password is incorrect";
}
else {
	echo "Your are logged in.";
}

//header("Location:index.html");


?>
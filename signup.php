<?php

include 'connection.php';

$vfirstname=$_POST['rfirstname'];
$vlastname=$_POST['rlastname'];
$vmobileno=$_POST['rmobileno'];
$vpassword=$_POST['rpassword'];
$vbalance=0;

$sql ="insert into persons
values('$vfirstname','$vlastname',$vmobileno,'$vpassword',$vbalance)";
$result=mysqli_query($conn,$sql);
echo $vfirstname;
//header("Location:index.html");


?>
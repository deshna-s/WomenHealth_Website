<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'wdl');

// $name = $_POST['user'];
// $pass = $_POST['password'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$q = " select * from signup  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into signup(fname,lname,email,username,password) values('$fname','$lname','$email','$username','$password')";
	mysqli_query($con, $qy);
}



?>
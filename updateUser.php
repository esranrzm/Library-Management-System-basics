<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$uid=$_POST['user_id']; //this is what we get from the form.
$name=$_POST['user_name'];
$surname=$_POST['user_surname'];
$address=$_POST['user_address'];
$email=$_POST['user_email'];
$phone=$_POST['phone_no'];
$password=$_POST['user_password'];


$res=mysqli_query($link,"UPDATE Users SET user_name='$name', user_surname='$surname', user_email='$email',address='$user_address', phone_no='$phone_no',user_password='$password' WHERE user_id = '$uid'");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; editUser.php");
mysqli_close($link);
?>
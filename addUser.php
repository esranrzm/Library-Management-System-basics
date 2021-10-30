<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$uid=$_POST['user_id']; //this is what we get from the form.
$name=$_POST['user_name'];
$surname=$_POST['user_surname'];
$address=$_POST['user_address'];
$mail=$_POST['user_email'];
$phone=$_POST['phone_no'];
$password=$_POST['user_password'];


$res=mysqli_query($link,"INSERT INTO Users (user_id, user_name, user_surname, user_address,user_email,phone_no,user_password) VALUES ('$uid', '$name', '$surname', '$address','$mail','$phone','$password');");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; editUser.php");
mysqli_close($link);
?>

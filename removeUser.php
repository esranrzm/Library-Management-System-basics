<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$uid=$_POST['user_id']; //this is what we get from the form.


$res=mysqli_query($link,"DELETE FROM Users WHERE user_id = '$uid'");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; editUser.php");
mysqli_close($link);
?>

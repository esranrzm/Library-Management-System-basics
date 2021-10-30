<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$oid=$_POST['order_id']; 
$date=$_POST['order_date'];
$status=$_POST['order_status'];
$uid=$_POST['user_id'];


$res=mysqli_query($link,"INSERT INTO Orders (order_id, order_date, order_status, user_id) VALUES ('$oid', '$date', '$status', '$uid');");

$res2=mysqli_query($link,"INSERT INTO place_order (order_id, user_id) VALUES ('$oid','$uid');");

$db_result2=mysqli_fetch_array($res2);

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}

if($db_result2!=NULL){
	echo "<script> alert('ERROR');</script>";
}



header("Refresh:0; editOrder.php");
mysqli_close($link);
?>

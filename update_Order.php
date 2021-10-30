<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$oid=$_POST['order_id']; //this is what we get from the form.
$date=$_POST['order_date'];
$status=$_POST['order_status']; //this is what we get from the form.
$uid=$_POST['user_id'];


$res=mysqli_query($link,"UPDATE Orders SET order_id='$oid', order_date='$date',order_status = '$status' ,user_id = '$uid'  WHERE user_id = '$uid' AND order_id='$oid'");


$res2=mysqli_query($link,"UPDATE place_order SET order_id='$oid', user_id = '$uid'  WHERE user_id = '$uid' AND order_id='$oid'");

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
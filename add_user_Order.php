<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}


$uid = $_POST['user_id'];
$pid = $_POST['product_id'];
$oid = $uid + rand(1,9);
$date = date("Y-m-d");


$res=mysqli_query($link,"INSERT INTO Orders (order_id, order_date,user_id,order_status) VALUES ('$oid', '$date', '$uid', '1')");
$res2 = mysqli_query($link,"INSERT INTO all_orders (user_id, product_id) VALUES ('$uid', '$pid')");

$sql1 = mysqli_query($link,"INSERT INTO place_order (user_id,order_id) VALUES ('$uid', '$oid');");

$db_result2 = mysqli_fetch_array($sql1);

$db_result3 = mysqli_fetch_array($res2);

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}
if($db_result2!=NULL){
	echo "<script> alert('ERROR');</script>";
}
if($db_result3!=NULL){
	echo "<script> alert('ERROR');</script>";
}

header("Refresh:0; myOrders.php");
mysqli_close($link);
?>
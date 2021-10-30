<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$oid=$_POST['order_id'];


$res=mysqli_query($link,"DELETE FROM Orders WHERE order_id = '$oid'");

$res2=mysqli_query($link,"DELETE FROM place_order WHERE order_id = '$oid'");

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

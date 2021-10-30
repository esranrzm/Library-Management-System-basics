<?php 
require 'includes/db-inc.php';
include "includes/header.php"; 
session_start();
	$oid = $_SESSION['order_id']
	$book = $_SESSION['title'];
	$name = $_SESSION['user_name'];
	$number = $_SESSION['user_id'];

	
if(isset($_POST['submit'])){
	$oid = trim($_POST['order_id'])
	$bn = trim($_POST['title']);
	$bdate = trim($_POST['order_date']);
	

	
	

	$sql = "INSERT INTO orders(order_id, order_date, order_status, user_id) values('$iod', '$bdate', null,  '$number)";
	$query = mysqli_query($conn, $sql);
	$error = false;
	if($query){
		$error = true;
	}
	else {
		echo "
		<script>
		alert('Unsuccessful');
		</script>
	";
	}

}
	
?>


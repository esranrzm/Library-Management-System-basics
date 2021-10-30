<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}


$pid=$_POST['product_id'];
$title=$_POST['title'];
$rating=$_POST['rating'];
$author=$_POST['author'];
$publication_date=$_POST['publication_date'];
$page_count=$_POST['page_count'];
$product_count=$_POST['product_count'];



$res=mysqli_query($link,"INSERT INTO Products (product_id, title, rating, author, publication_date, page_count, product_count) VALUES ('$pid', '$title', '$rating', '$author','$publication_date','$page_count','$product_count');");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; editProduct.php");
mysqli_close($link);
?>

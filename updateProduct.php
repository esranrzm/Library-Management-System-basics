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



$res=mysqli_query($link,"UPDATE Products SET title='$title',rating='$rating',author='$author',publication_date='$publication_date', page_count='$page_count',product_count='$product_count' WHERE product_id = '$pid'");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; editProduct.php");
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Order</title>
	<link rel="stylesheet" type="text/css" href="editProduct.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Product</h1>
	<div class = "editProduct_body">
		
		
			<div class = "addProduct">
				<div id="form"> 
					<h3> Add Product </h3> 
					<form action='addProduct.php' method=POST>
					<b> Product ID: </b>
					<input type='text' name='product_id'> 
					<br>
					<br>
					<b> title: </b>
					<input type='text' name='title'> 
					<br>
					<br>
					<b> rating: </b>
					<input type='text' name='rating'> 
					<br>
					<br>
					<b> author: </b>
					<input type='text' name='author'> 
					<br>
					<br>
					<b> publication_date: </b>
					<input type='text' name='publication_date'> 
					<br>
					<br>
					<b> page_count: </b>
					<input type='text' name='page_count'> 
					<br>
					<br>
					<b> product_count: </b>
					<input type='text' name='product_count'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updateProduct">
				<div id="form"> 
					<h3> Update Product </h3> 
					<form action='updateProduct.php' method=POST>
					<b> Product ID: </b>
					<input type='text' name='product_id'> 
					<br>
					<br>
					<b> title: </b>
					<input type='text' name='title'> 
					<br>
					<br>
					<b> rating: </b>
					<input type='text' name='rating'> 
					<br>
					<br>
					<b> author: </b>
					<input type='text' name='author'> 
					<br>
					<br>
					<b> publication_date: </b>
					<input type='text' name='publication_date'> 
					<br>
					<br>
					<b> page_count: </b>
					<input type='text' name='page_count'> 
					<br>
					<br>
					<b> product_count: </b>
					<input type='text' name='product_count'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removeProduct">
				<div id="form"> 
					<h3> Remove Product </h3> 
					<form action='removeProduct.php' method=POST>
					<b> Product ID: </b>
					<input type='text' name='product_id'> 
					<br>
					<br>					
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>

			<div class = "removeProduct">
				<div id="form"> 
					<h3> Search Product </h3> 
					<form action='editProduct.php' method=POST>
					<b> Product ID: </b>
					<input type='text' name='product_id'> 
					<br>
					<br>					
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Product Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Products");

echo "<table border='1'>
<tr>
<th>product_id</th>
<th>title</th>
<th>rating</th>
<th>author</th>
<th>publication_date</th>
<th>page_count</th>
<th>product_count</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['product_id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['rating'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['publication_date'] . "</td>";
echo "<td>" . $row['page_count'] . "</td>";
echo "<td>" . $row['product_count'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 

<h3>Searched Product Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$nid=$_POST['product_id'];

$result = mysqli_query($con,"SELECT * FROM Products WHERE product_id = $nid");

echo "<table border='1'>
<tr>
<th>product_id</th>
<th>title</th>
<th>rating</th>
<th>author</th>
<th>publication_date</th>
<th>page_count</th>
<th>product_count</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['product_id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['rating'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['publication_date'] . "</td>";
echo "<td>" . $row['page_count'] . "</td>";
echo "<td>" . $row['product_count'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 
		

	</div>
</body>
</html>

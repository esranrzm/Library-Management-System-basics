<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Order</title>
	<link rel="stylesheet" type="text/css" href="edit_Order.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Order</h1>
	<div class = "editOrder_body">
		
		
			<div class = "addOrder">
				<div id="form"> 
					<h3> Add Order </h3> 
					<form action='add_Order.php' method=POST>
					<b> order id: </b>
					<input type='text' name='order_id'> 
					<br>
					<br>
					<b> order date: (yyyy-mm-dd) </b>
					<input type='text' name='order_date'> 
					<br>
					<br>
					<b> order status: </b>
					<input type='text' name='order_status'> 
					<br>
					<br>
					<b> user id: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updateOrder">
				<div id="form"> 
					<h3> Update Order </h3> 
					<form action='update_Order.php' method=POST>
					<b> order id: </b>
					<input type='text' name='order_id'> 
					<br>
					<br>
					<b> order date: (yyyy-mm-dd) </b>
					<input type='text' name='order_date'> 
					<br>
					<br>
					<b> order status: </b>
					<input type='text' name='order_status'> 
					<br>
					<br>
					<b> user id:</b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removeOrder">
				<div id="form"> 
					<h3> Remove Order </h3> 
					<form action='remove_Order.php' method=POST>
					<b> Order id: </b>
					<input type='text' name='order_id'> 
					<br>
					<br>
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>

			<div class = "removeOrder">
				<div id="form"> 
					<h3> Search Order </h3> 
					<form action='editOrder.php' method=POST>
					<b> Order ID: </b>
					<input type='text' name='order_id'> 
					<br>
					<br>
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Order Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Orders");

echo "<table border='1'>
<tr>
<th>order_id</th>
<th>order_date</th>
<th>order_status</th>
<th>user_id</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['order_date'] . "</td>";
echo "<td>" . $row['order_status'] . "</td>";
echo "<td>" . $row['user_id'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 

<h3>Searched Order Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$orderid=$_POST['order_id'];

$result = mysqli_query($con,"SELECT * FROM Orders WHERE order_id = $orderid");

echo "<table border='1'>
<tr>
<th>order_id</th>
<th>order_date</th>
<th>order_status</th>
<th>user_id</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['order_date'] . "</td>";
echo "<td>" . $row['order_status'] . "</td>";
echo "<td>" . $row['user_id'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 
		

	</div>
</body>
</html>

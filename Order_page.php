<!DOCTYPE html>
<html>
<head>
	<title>Make An Order</title>
	<link rel="stylesheet" type="text/css" href="Order_page.css" />

</head>
<body>
	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Return Home Page</a></li>
  			<li><a href="myorders.php">Search for my Orders</a></li>
		</ul>
	</div>

	<div class = "bodypart" align = "center">
		<p>You Can Use The Product Table To Select The Products </p>
		
		<div id="table2">
				<?php
				$con=mysqli_connect("localhost","root","","library_management");
				// Check connection
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result2 = mysqli_query($con,"SELECT * FROM Products");

				echo "<table border='1' background-color: white;>
				<tr>
				<th>product_id</th>
				<th>title</th>
				<th>rating</th>
				<th>author</th>
				<th>publication_date</th>
				<th>page_count</th>
				<th>product_count</th>
				</tr>";

				while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
				{
				echo "<tr>";
				echo "<td>" . $row2['product_id'] . "</td>";
				echo "<td>" . $row2['title'] . "</td>";
				echo "<td>" . $row2['rating'] . "</td>";
				echo "<td>" . $row2['author'] . "</td>";
				echo "<td>" . $row2['publication_date'] . "</td>";
				echo "<td>" . $row2['page_count'] . "</td>";
				echo "<td>" . $row2['product_count'] . "</td>";
				echo "</tr>";
				}
				echo "</table2>";
				

				mysqli_close($con);
				?>
		</div>  
		
		<p>Please Fill Out The Form Below To Make Your Order</p>
		<p>You Can only add one item at once</p>
		<div class = "Orderform">
				<div id="form"> 
					<h3> Make Order </h3> 
					<div class = "forminside">
						<form action='add_user_Order.php' method=POST>
						
						<label for="user_id">user id: </label>
						<input type='text' id ="user_id" name='user_id' placeholder="Please Enter id"> 
						<br>
						<br>
						
						
						<label for="pid">product ID: </label>
						<input type='text' id ="pid" name='product_id' placeholder="Please Enter product ID"> 
						<br>
						<br>
						
						<input type='submit' value="Make Order">
						<br>
						</form>
					</div>
				</div> 
		</div>
	</div>

</body>
</html>

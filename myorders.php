<!DOCTYPE html>
<html>
<head>
	<title>Make An Order</title>
	<link rel="stylesheet" type="text/css" href="myOrder_page.css" />

</head>
<body>
	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Return Home Page</a></li>
  			<li><a href="Order_page.php">Return Order Page</a></li>
		</ul>
	</div>

	<div class = "bodypart" align = "center">
		

			<div class = "printOrder">
				<div id="form"> 
					<form action='myorders.php' method=POST>	
					<b> user ID: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>
			<br>
			<br>
		<div id="table">
			<?php
			$con=mysqli_connect("localhost","root","","library_management");
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$uid = $_POST['user_id'];

			
			$result = mysqli_query($con,"SELECT P.product_id,P.title,P.author FROM Products P
				WHERE P.product_id IN (SELECT R.product_id FROM all_orders R, Users U WHERE U.user_id = $uid)");
			
			echo "<tr>";
			echo "<td>" . "Here are Your Orders" . "</td>";

			echo "<table border='1' background-color: white;>
			<tr>
			<th>product_id</th>
			<th>title</th>
			<th>author</th>
			</tr>";

			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				echo "<tr>";
				echo "<td>" . $row['product_id'] . "</td>";
				echo "<td>" . $row['title'] . "</td>";
				echo "<td>" . $row['author'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
				

			mysqli_close($con);
			?>
		</div>
	</div>	
</body>	  
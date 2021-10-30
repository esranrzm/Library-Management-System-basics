<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View User</title>
	<link rel="stylesheet" type="text/css" href="editUser.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View User</h1>
	<div class = "editUser_body">
		
		
			<div class = "addUser">
				<div id="form"> 
					<h3> Add User </h3> 
					<form action='addUser.php' method=POST>

					<b> Uid: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					<b> Name: </b>
					<input type='text' name='user_name'> 
					<br>
					<br>
					<b> Lastname: </b>
					<input type='text' name='user_surname'> 
					<br>
					<br>
					<b> Address: </b>
					<input type='text' name='user_address'> 
					<br>
					<br>
					<b> E-Mail: </b>
					<input type='text' name='user_email'> 
					<br>
					<br>
					<b> Phone_no: </b>
					<input type='text' name='phone_no'> 
					<br>
					<br>
					<b> password: </b>
					<input type='text' name='user_password'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updateUser">
				<div id="form"> 
					<h3> Update User </h3> 
					<form action='updateUser.php' method=POST>
					<b> Uid: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					<b> Name: </b>
					<input type='text' name='user_name'> 
					<br>
					<br>
					<b> Lastname: </b>
					<input type='text' name='user_surname'> 
					<br>
					<br>
					<b> Address: </b>
					<input type='text' name='user_address'> 
					<br>
					<br>
					<b> E-Mail: </b>
					<input type='text' name='user_email'> 
					<br>
					<br>
					<b> Phone_no: </b>
					<input type='text' name='phone_no'> 
					<br>
					<br>
					<b> password: </b>
					<input type='text' name='user_password'> 
					<br>
					<br>

					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removeUser">
				<div id="form"> 
					<h3> Remove User </h3> 
					<form action='removeUser.php' method=POST>

					<b> user_id: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>


			<div class = "removeUser">
				<div id="form"> 
					<h3> Search User </h3> 
					<form action='editUser.php' method=POST>

					<b> user_id: </b>
					<input type='text' name='user_id'> 
					<br>
					<br>
					
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All User Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>user_id</th>
<th>user_name</th>
<th>user_surname</th>
<th>user_address</th>
<th>user_email</th>
<th>phone_no</th>
<th>user_password</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['user_surname'] . "</td>";
echo "<td>" . $row['user_address'] . "</td>";
echo "<td>" . $row['user_email'] . "</td>";
echo "<td>" . $row['phone_no'] . "</td>";
echo "<td>" . $row['user_password'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>

<h3>Searched User Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","library_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nid=$_POST['user_id'];

$result = mysqli_query($con,"SELECT * FROM Users WHERE user_id = $nid");

echo "<table border='1'>
<tr>
<th>user_id</th>
<th>user_name</th>
<th>user_surname</th>
<th>user_address</th>
<th>user_email</th>
<th>phone_no</th>
<th>user_password</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['user_surname'] . "</td>";
echo "<td>" . $row['user_address'] . "</td>";
echo "<td>" . $row['user_email'] . "</td>";
echo "<td>" . $row['phone_no'] . "</td>";
echo "<td>" . $row['user_password'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>  
		

	</div>
</body>
</html>

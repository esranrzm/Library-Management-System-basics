<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$link = mysqli_connect("localhost", "root", "", "library_management");



// Check connection
if($link === false){
    die("ERROR: Could not connect. " .mysqli_connect_error());
}

$uid=$_POST['user_id']; //this is what we get from the form.
$upass=$_POST['user_password'];

if(empty($_POST['user_id']) || empty($_POST['user_password'])   )
{
  echo "<script>alert('You have an empty field.');</script>";

  header("Refresh:0; url=userLogin.html");   // go back to the login page
}



$sql = "SELECT U.user_name, U.user_surname, U.user_id, U.user_email, U.user_address, U.phone_no, U.user_password
          FROM Users U"
          ;

$result = mysqli_query($link, $sql);


if(isset($_POST['log']))
{
          
 
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))

  {
     
    if($uid==$row['user_id'] && $upass==$row['user_password'])
    {
         //storing the name and surname for further use
      $_SESSION['user_signin_name']  = $row['user_name'];
      $_SESSION['user_signin_surname']  = $row['user_surname'];
      $_SESSION['users_id']  = $row['user_id'];

      header('Location: user_page.html');
      exit;
    }
    else if($uid != $row['user_id'] || $upass != $row['user_password'])
    {
      echo "<script>alert('The password or the username is incorrect');</script>";
      header("Location: userLogin.html");
      
    }

  }
  
}
mysqli_close($link);
?>



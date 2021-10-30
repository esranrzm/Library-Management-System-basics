<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$link = mysqli_connect("localhost", "root", "", "library_management");




// Check connection
if($link === false){
    die("ERROR: Could not connect. " .mysqli_connect_error());
}


$mid=$_POST['manager_id']; //this is what we get from the form.
$pass=$_POST['manager_password'];


if(empty($_POST['manager_id']) || empty($_POST['manager_password'])   )
{
  echo "<script>alert('You have an empty field.');</script>";

    header("Refresh:0; url=login.html");   // go back to the login page
}

if(isset($_POST['log']))
{
    
    if($mid == NULL)   // if there is no such user like that.
    {
      echo "<script>alert('The ID does not exist');</script>";
      header("Refresh:0; url=login.html");   // go back to the login page
    } 
    
    else if($mid!= "cs306" || $pass!= "database")
    {
      echo "<script>alert('The password or the username is incorrect');</script>";
      header("Refresh:0; url=login.html");
    }

    else if($mid== "cs306" && $pass== "database")
    {
      
      header("Refresh:0; url=admin_page.html");
    }
    
    else{
      header("Refresh:0; url=login.html");
    }
}
mysqli_close($link);
?>
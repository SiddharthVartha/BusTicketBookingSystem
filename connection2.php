<?php

  $conn = new mysqli("localhost", "root", "", "your database name");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';
  $Username = $_POST['username'];
  $Password = $_POST['password'];
  echo $Username;
 $selectquery= ("select * from user where Username='$Username' and Password='$Password'");
 if($result = mysqli_query($conn, $selectquery)){
    if(mysqli_num_rows($result) > 0){
      header("Location: registration.php");  
    }
    else{
      header("Location: home.php");  
    }
  }  
$conn->close();
?>
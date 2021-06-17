
<?php

  $conn = new mysqli("localhost", "root", "", "your database name");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';
  $Username = $_POST['username'];
  $Password = $_POST['password'];
  $insertquery= "INSERT INTO user (Username,Password) values ('$Username','$Password')";
  if ($result = mysqli_query($conn,$insertquery)) {
  echo "Insert successfully";  
  }
  else{
  echo "Returned rows are:null";  
  }
$conn->close();
?>

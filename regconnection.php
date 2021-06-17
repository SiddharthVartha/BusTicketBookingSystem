<?php
  $conn = new mysqli("localhost", "root", "", "Your database name");  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  echo 'Connected to the database.<br>';
  session_start();
  $Name = $_POST['name'];
  $Email= $_POST['EmailId'];
  $_SESSION['mail']=$Email; 
$insertquery= "INSERT INTO registration (Name,Email) values ('$Name','$Email')";
if ($result = mysqli_query($conn,$insertquery)) {
 echo "Insert successfully";  
}
else{
  echo "Returned rows are:null";  
}
$conn->close();
?>
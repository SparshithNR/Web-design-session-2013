<?php
$con=mysqli_connect("example.com","peter","abc123","web");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Persons (FirstName, LastName)
VALUES
('$_POST[firstname]','$_POST[lastname]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
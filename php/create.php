<?php
$con=mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Create database
$sql="CREATE DATABASE web";
if (mysqli_query($con,$sql))
  {
  echo "Database web created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
$db_selected = mysqli_select_db($con,'web');
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
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
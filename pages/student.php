<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="INSERT INTO student_account(Susername,Spassword) Values('$username','$password')";
  mysqli_query($dbc,$query)
  or die("Error add");
  mysqli_close($dbc);





?>





</body>
</html>
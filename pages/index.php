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
  $user=$_POST['user'];
  setcookie('username',$username);
  
  if("$user"=="student"){
     $query="SELECT Snumber,Susername,Spassword FROM student_account Where Susername='$username'and Spassword='$password'";
     


  $data=mysqli_query($dbc,$query)
  or die("Error ");

  while($row=mysqli_fetch_array($data)){
     setcookie('number',$row['Snumber']);
    
     header('Location: http://localhost/db_BigHW/pages/student/student.php');
    
  }


  mysqli_close($dbc);

}



?>





</body>
</html>
<?php

$dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");

  $edit_name=$_POST['ic_name'];
  $edit_admin=$_POST['ic_admin'];
  $edit_tel=$_POST['ic_tel'];
 if(!empty($edit_name) && !empty($edit_admin) && !empty($edit_tel))
  $query="INSERT INTO academy(academyName,principal,contact) VALUES('$edit_name','$edit_admin','$edit_tel')";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  header('Location: http://localhost/db_BigHW/pages/administer/administer_academy.php');
  


  mysqli_close($dbc);

   
  

?>

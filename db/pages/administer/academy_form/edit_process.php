<?php

$dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $edit_no=$_POST['ic_no'];
  $edit_name=$_POST['ic_name'];
  $edit_admin=$_POST['ic_admin'];
  $edit_tel=$_POST['ic_tel'];
 
  $query="UPDATE academy SET principal='$edit_admin',contact='$edit_tel' where id = $edit_no";
  $data=mysqli_query($dbc,$query)
  or die("Error ");
  header('Location: http://localhost/db_BigHW/pages/administer/administer_academy.php');
  


  mysqli_close($dbc);

   
  

?>

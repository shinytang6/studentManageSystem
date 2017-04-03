<?php

$dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");

  $edit_aname=$_POST['ic_aname'];
  $edit_mname=$_POST['ic_mname'];
  $edit_admin=$_POST['ic_admin'];
  $edit_tel=$_POST['ic_tel'];
 if(!empty($edit_aname) && !empty($edit_mname) &&!empty($edit_admin) && !empty($edit_tel))
  $query="INSERT INTO major(academyName,majorName,principal,contact) VALUES('$edit_aname','$edit_mname','$edit_admin','$edit_tel')";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  header('Location: http://localhost/db_BigHW/pages/administer/administer_major.php');
  


  mysqli_close($dbc);

   
  

?>

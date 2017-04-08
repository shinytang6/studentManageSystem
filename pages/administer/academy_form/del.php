<?php

 $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");


   $no =$_POST['number'] ;
 if(!empty($no) )
  $query="DELETE from academy where id=$no";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  //header('Location: http://localhost/db_BigHW/pages/administer/administer_major.php');
 //  window.location.reload("http://localhost/db_BigHW/pages/administer/administer_major.php");


  mysqli_close($dbc);

   
  

?>

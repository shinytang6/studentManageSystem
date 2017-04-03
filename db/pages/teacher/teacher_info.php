<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">

</head>
<body>
<?php
require_once("../common/teacher_nav.php");

?>

<div class="info">

<table class="table table-striped">
  <h2>个人信息</h2>
  <thead>
    <tr>
      <th>姓名</th>
      <th>性别</th>
      <th>所在系</th>
  
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['Tnumber'];
 
  $query="SELECT teacher.Tname,teacher.Tsex,teacher.Tdept FROM teacher_account,teacher Where teacher.Tno=$number";
  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
    setcookie('Tname',$row['Tname']);
  


    echo "<br>";
    echo  '<tr>
    <td>'.$row['Tname'].'</td>'.
    '<td>'.$row['Tsex'].'</td>'.
    '<td>'.$row['Tdept'].'</td>';

    break;
 
     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
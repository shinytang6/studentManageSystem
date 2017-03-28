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
require_once("../common/student_nav.php");

?>

<div class="info">

<table class="table table-striped">
  <h2>个人信息</h2>
  <thead>
    <tr>
      <th>姓名</th>
      <th>性别</th>
      <th>年级</th>
      <th>学院</th>
      <th>专业</th>
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['number'];
  $query="SELECT student.Sname,student.Ssex,student.Sdept,student.Smajor,student.Sgrade FROM student_account,student Where student.Sno=$number";
  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
    setcookie('Sdept',$row['Sdept']);
    setcookie('Smajor',$row['Smajor']);


    echo "<br>";
    echo  '<tr>
    <td>'.$row['Sname'].'</td>'.
    '<td>'.$row['Ssex'].'</td>'.
    '<td>'.$row['Sgrade'].'</td>'.
    '<td>'.$row['Sdept'].'</td>'.
    '<td>'.$row['Smajor'].'</td>';
    break;
 
     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
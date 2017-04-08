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
  <h2>我的选课</h2>
  <thead>
    <tr>
      <th>课程名</th>
      <th>教师</th>
      <th>地点</th>
      <th>时间</th>
      <th>学期</th>
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['number'];
  $query="SELECT course.Cname,course.Cteacher,course.Csite,course.Ctime,course.Csemester FROM student natural join course_student natural join  course where student.Sno=$number; ";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
  
    echo  '
    <tr>
      <td>'.$row['Cname'].'</td>'.
      '<td>'.$row['Cteacher'].'</td>'.
      '<td>'.$row['Csite'].'</td>'.
      '<td>'.$row['Ctime'].'</td>'.
      '<td>'.$row['Csemester'].'</td>';

     
    
  }
 


  mysqli_close($dbc);

   
  

  ?>
 </tbody>
</table>
</div>


</body>
</html>
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
  <h2>开设课程</h2>
  <thead>
    <tr>
      <th>课程号</th>
      <th>课程名</th>
      <th>选课学生</th>
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['Tnumber'];
  $Tname=$_COOKIE['Tname'];
  $query="SELECT Cno,Cname,Sname FROM teacher natural join course_student natural join  course natural join student where teacher.Tno=$number and Cteacher='$Tname'; ";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
  
    echo "<br>";
    echo  '
    <tr>
      <td>'.$row['Cno'].'</td>'.
      '<td>'.$row['Cname'].'</td>'.
      '<td>'.$row['Sname'].'</td>';

     
    
  }
 


  mysqli_close($dbc);

   
  

  ?>
 </tbody>
</table>
</div>


</body>
</html>
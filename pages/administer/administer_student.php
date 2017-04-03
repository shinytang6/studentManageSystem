<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">
 <script type="text/javascript" src="../../library/jquery-3.1.1.min.js"></script>

</head>
<body>
<?php
require_once("../common/administer_nav.php");

?>

<div class="info">

<table class="table table-striped">
  <h2>学生信息</h2>
  <a class="btn btn-primary add " style="margin-left: 566px;">添加</a>
  <thead>
    <tr>
      <th>姓名</th>
      <th>性别</th>
      <th>学院</th>
      <th>专业</th>
      <th>年级</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>

  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $Sdept=$_COOKIE['Sdept'];
  $query="SELECT * FROM student";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
   
  
    echo  '<tr>
    <td>'.$row['Sname'].'</td>'.
    '<td>'.$row['Ssex'].'</td>'.
    '<td>'.$row['Sdept'].'</td>'.
    '<td>'.$row['Smajor'].'</td>'.
    '<td>'.$row['Sgrade'].'</td>'.
    '<td>'.'<a class="btn edit " style="background-color:#eb9316;color:white">管理</a>'.'<a class="btn btn-danger del">删除</a>'.'</td>';
    



     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
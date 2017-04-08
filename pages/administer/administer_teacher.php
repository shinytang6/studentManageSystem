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

<table class="table table-striped" style="margin-left: 224px;">
  <h2>学生信息</h2>
  <a class="btn btn-primary add " style="margin-left: 566px;">添加</a>
  <thead>
    <tr>
      <th>编号</th>
      <th>姓名</th>
      <th>性别</th>
      <th>所属学院</th>
      <th>学历</th>
      <th>毕业学校</th>
      <th>电话</th>
      <th>邮箱</th>
      <th>办公室</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>

  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $Sdept=$_COOKIE['Sdept'];
  $query="SELECT * FROM teacher";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
   
  
    echo  '<tr>
    <td>'.$row['Tno'].'</td>'.
    '<td>'.$row['Tname'].'</td>'.
    '<td>'.$row['Tsex'].'</td>'.
    '<td>'.$row['Tdept'].'</td>'.
    '<td>'.$row['Tedubg'].'</td>'.
    '<td>'.$row['Tschool'].'</td>'.
    '<td>'.$row['Ttel'].'</td>'.
    '<td>'.$row['Temail'].'</td>'.
    '<td>'.$row['Toffice'].'</td>'.
    '<td>'.'<a class="btn edit " style="background-color:#eb9316;color:white">编辑</a>'.'<a class="btn btn-danger del">删除</a>'.'</td>';
    



     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
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

<table class="table table-striped" style="margin-left: 245px;">
  <h2>个人信息</h2>
  <thead>
    <tr>
      <th>姓名</th>
      <th>性别</th>
      <th>所属学院</th>
      <th>学历</th>
      <th>毕业学校</th>
      <th>电话</th>
      <th>邮箱</th>
      <th>办公室</th>
  
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['Tnumber'];
 
  $query="SELECT * FROM teacher_account,teacher Where teacher.Tno=$number";
  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
    setcookie('Tname',$row['Tname']);
  


    echo "<br>";
    echo  '<tr>
    <td>'.$row['Tname'].'</td>'.
    '<td>'.$row['Tsex'].'</td>'.
    '<td>'.$row['Tdept'].'</td>'.
    '<td>'.$row['Tedubg'].'</td>'.
    '<td>'.$row['Tschool'].'</td>'.
    '<td>'.$row['Ttel'].'</td>'.
    '<td>'.$row['Temail'].'</td>'.
    '<td>'.$row['Toffice'].'</td>';

    break;
 
     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
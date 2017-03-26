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
require_once("../common/nav.php");

?>


<div class="info">

<table class="table table-striped">
  <h2>我的专业</h2>
  <thead>
    <tr>
      <th>院系</th>
      <th>负责人</th>
      <th>联系方式</th>
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $Sdept=$_COOKIE['Sdept'];
  $query="SELECT academy.academyName,academy.principal,academy.contact FROM academy,student Where academy.academyName='$Sdept'";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
    echo "<br>";
    echo  '<tr>
    <td>'.$row['academyName'].'</td>'.
    '<td>'.$row['principal'].'</td>'.
    '<td>'.$row['contact'].'</td>';
    break;
 


     
    
  }


  mysqli_close($dbc);

   
  

  ?>
 </tbody>
</table>




<table class="table table-striped">
  
  <thead>
    <tr>
      <th>专业</th>
      <th>负责人</th>
      <th>联系方式</th>
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $Sdept=$_COOKIE['Sdept'];
  $Smajor=$_COOKIE['Smajor'];
  $query="SELECT major.majorName,major.principal,major.contact FROM major,student Where major.majorName='$Smajor'";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
    echo "<br>";
    echo  '<tr>
    <td>'.$row['majorName'].'</td>'.
    '<td>'.$row['principal'].'</td>'.
    '<td>'.$row['contact'].'</td>';
    break;
 


     
    
  }


  mysqli_close($dbc);

   
  

  ?>
 </tbody>
</table>

</div>

</body>
</html>
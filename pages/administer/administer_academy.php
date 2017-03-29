<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">
 <script type="text/javascript" src="../../library/jquery-3.1.1.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
      $(".edit").click(function(){
        
        var no=$(this).parent().prev().prev().prev().prev().html();
        var academyName=$(this).parent().prev().prev().prev().html();
        var principal=$(this).parent().prev().prev().html();
        var contact=$(this).parent().prev().html();
         htmlobj=$.ajax({
          url:"academy_form/edit.php",
          type:"post",
          data:{ 
          number:no,
          name:academyName,
          prin:principal,
          con:contact
          },
          async:false,
          error : function(){ alert("error")},
        });

        $(".info").html(htmlobj.responseText);
    
      });



   });


 </script>
</head>
<body>
<?php
require_once("../common/administer_nav.php");

?>

<div class="info">

<table class="table table-striped">
  <h2>学院信息</h2>
  <thead>
    <tr>
      <th>编号</th>
      <th>名称</th>
      <th>负责人</th>
      <th>联系电话</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>

  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $Sdept=$_COOKIE['Sdept'];
  $query="SELECT * FROM academy";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
   
    echo "<br>";
    echo  '<tr>
    <td>'.$row['id'].'</td>'.
    '<td>'.$row['academyName'].'</td>'.
    '<td>'.$row['principal'].'</td>'.
    '<td>'.$row['contact'].'</td>'.
    '<td>'.'<a class="btn edit " style="background-color:#eb9316;color:white">编辑</a>'.'<a class="btn btn-danger del">删除</a>'.'</td>';
    



     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>



</body>
</html>
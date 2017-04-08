<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">
 <script type="text/javascript" src="../../library/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../../library/bootstrap-select.min.js"></script>
 <script type="text/javascript" src="../../library/bootstrap.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){

     //编辑按钮
      $(".edit").click(function(){
        
        var no=$(this).parent().prev().prev().prev().prev().prev().html();
        var academyName=$(this).parent().prev().prev().prev().prev().html();
        var majorName=$(this).parent().prev().prev().prev().html();
        var principal=$(this).parent().prev().prev().html();
        var contact=$(this).parent().prev().html();
         htmledit=$.ajax({
          url:"major_form/edit.php",
          type:"post",
          data:{ 
          number:no,
          aname:academyName,
          mname:majorName,
          prin:principal,
          con:contact
          },
          async:false,
          error : function(){ alert("error")},
        });

        $(".info").html(htmledit.responseText);
    
      });

      //删除按钮
      $(".del").click(function(){
        
           var r=confirm("确认要删除吗");
           if(r==true){  
              
               var no=$(this).parent().prev().prev().prev().prev().prev().html();

               htmldel=$.ajax({
                   url:"major_form/del.php",
                   type:"post",
                   data:{ 
                   number:no
        
                  },
                   async:false,
                   error : function(){ alert("error")},
                   //调用成功后刷新页面
                   success: function(){

                      window.location.reload();


                   }
                });


           }



      });
      

      //添加按钮
       $(".add").click(function(){
          htmladd=$.ajax({
          url:"major_form/add.php",
          async:false,
          error : function(){ alert("error")},
        });

        $(".info").html(htmladd.responseText);
          });
           

   });


 </script>


</head>
<body>
<?php
require_once("../common/administer_nav.php");

?>

<div class="info">

<table class="table table-striped" style="margin-left: 300px;">
  <h2>专业信息</h2>
  <a class="btn btn-primary add " style="margin-left: 566px;">添加</a>


<form action="<?php  echo $_SERVER['PHP_SELF'];  ?>" method="post">
 <span class="input-group col-md-3"  style="left: 294px;top: 20px;">
       <h4>学院</h4>
       <input type="text" class="form-control" placeholder="请输入学院名" name="acadmy" value="<?php echo $course  ?>" style="left: 60px;top: -34px;">
       <h4 style="position: relative;top: -61px;left: 334px;">专业</h4>
       <input type="text" class="form-control" placeholder="请输入专业名" name="maj" value="<?php echo $course  ?>" style="left: 394px;top: -96px;">
            
 </span>
  <button class="btn btn-info btn-search" name="submit" style="position: relative;left: 571px;top: -49px;">查找</button>
  </form>



  <thead>
    <tr>
      <th>编号</th>
      <th>所属学院</th>
      <th>专业</th>
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
  $acadmy=$_POST['acadmy'];
  $major=$_POST['maj'];
  //查询框为空则查询全部行，否则按照条件查询
  if(empty($acadmy) and empty($major) )
      $query="SELECT * FROM major";
  if(empty($acadmy) and !empty($major) )
      $query="SELECT * FROM major WHERE majorName='$major'";
  if(!empty($acadmy) and empty($major) )
      $query="SELECT * FROM major WHERE academyName='$acadmy'";
  if(!empty($acadmy) and !empty($major) )
      $query="SELECT * FROM major WHERE majorName='$major' and academyName='$acadmy'";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
   
  
    echo  '<tr>
    <td>'.$row['id'].'</td>'.
    '<td>'.$row['academyName'].'</td>'.
    '<td>'.$row['majorName'].'</td>'.
    '<td>'.$row['principal'].'</td>'.
    '<td>'.$row['contact'].'</td>'.
    '<td>'.$row['address'].'</td>'.
    '<td>'.'<a class="btn edit " style="background-color:#eb9316;color:white">编辑</a>'.'<a class="btn btn-danger del">删除</a>'.'</td>';
    



     
    
  }


  mysqli_close($dbc);

   
  

  ?>

 </tbody>
</table>







  

</body>
</html>
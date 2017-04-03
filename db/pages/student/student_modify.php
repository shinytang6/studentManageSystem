<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student_modify.css">
 

</head>
<body>
<?php
require_once("../common/student_nav.php");

?>




<div class="info">


  <h2>修改设定</h2>
  <form action="<?php  echo $_SERVER['PHP_SELF'];  ?>" method="post">
  <label for="oldpw">原密码</label>
  <input type="password" name="oldpw" id="oldpw" value="<?php echo $oldpw;  ?>">
  <br>
  <label for="newpw">新密码</label>
  <input type="password" name="newpw" id="newpw" value="<?php echo $newpw;  ?>">
  <br>
  <input type="submit" name="submit" id="submit" class="btn btn-primary" >
  </form>  
  <p style="color: red;font-size: 20px;margin-left: 540px;margin-top: 30px;">
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['number'];
  $oldpw=$_POST['oldpw'];
  $newpw=$_POST['newpw'];
 if(isset($_POST['submit'])){
  $query="UPDATE  student_account SET Spassword = '$newpw'   where Snumber=$number and Spassword='$oldpw'; "; 
 
  $data=mysqli_query($dbc,$query)
     or die("Error ");
   

  
   if(mysqli_affected_rows($dbc)){
  
    
     echo "修改成功";

  
    }


  else
    echo "密码错误，请重新输入";
  

 }
  mysqli_close($dbc);

   
  

  ?>

</p>


</body>
</html>
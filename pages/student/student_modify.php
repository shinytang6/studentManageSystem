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
require_once("../common/nav.php");

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
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['number'];
  $oldpw=$_POST['oldpw'];
  $newpw=$_POST['newpw'];

  $query="UPDATE  student_account SET Spassword = '$newpw'   where Snumber=$number and Spassword='$oldpw'; "; 
  $data=mysqli_query($dbc,$query)
     or die("Error ");
  if(isset($_POST['submit'])){
   

   if(mysqli_affected_rows()){
  
    
     echo "修改成功";

  
    }


  else
    echo "Error user";
  

 }
  mysqli_close($dbc);

   
  

  ?>




</body>
</html>
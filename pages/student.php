<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../library/bootstrap.min.css">

<link href="../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../dist/css/nav.css">


</head>
<body>
<?php
require("common/nav.php");

?>


<div class="info">
<h2 >登录信息</h2>
<p>你好  
  <?php
  $username=$_COOKIE['username'];
  
   echo  $username;
  

  ?>，
 欢迎来到学籍管理系统！

</p>
</div>
</body>
</html>


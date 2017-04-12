<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php
  $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $username=$_POST['username'];
  $password=$_POST['password'];
  $user=$_POST['user'];
  setcookie('username',$username);

  //防止登录注入攻击
  if(preg_match("/[ '.,:;*?`!@#$%^&+=)({}]|\]|\[|\/|\\\|\"|\|/",$username))
  {echo '不要在名字里面整些特殊符号,请使用字母、数字和汉字！';
exit();}
 
  if(preg_match("/[ '.,:;*?`!@#$%^&+=)({}]|\]|\[|\/|\\\|\"|\|/",$username)){echo '不要在名字里面整些特殊符号,请使用字母、数字和汉字！';
exit();}

  //登录身份是学生
  if("$user"=="student"){
     $query="SELECT Snumber,Susername,Spassword FROM student_account Where md5(Susername) LIKE md5('$username')and Spassword like md5('$password')";
     


  $data=mysqli_query($dbc,$query)
  or die("Error ");
  //查询结果为空
  if (mysql_num_rows($data) < 1){
          header('Location: http://localhost/db_BigHW/index.html');

     }
  while($row=mysqli_fetch_array($data)){
     setcookie('number',$row['Snumber']);
    
     header('Location: http://localhost/db_BigHW/pages/student/student.php');
    
  }


  mysqli_close($dbc);

}

 //登录身份是老师

  if("$user"=="teacher"){
    $query="SELECT Tnumber,Tusername,Tpassword FROM teacher_account Where md5(Tusername)=md5('$username')and Tpassword=md5('$password')";
     


  $data=mysqli_query($dbc,$query)
  or die("Error ");
  
   //查询结果为空
  if (mysql_num_rows($data) < 1){
          header('Location: http://localhost/db_BigHW/index.html');
         
     }
  while($row=mysqli_fetch_array($data)){
     setcookie('Tnumber',$row['Tnumber']);
    
     header('Location: http://localhost/db_BigHW/pages/teacher/teacher.php');
    
  }


  mysqli_close($dbc);






  }

  
  if("$user"=="administer"){
    $query="SELECT Anumber,Ausername,Apassword FROM administer_account Where Ausername='$username'and Apassword='$password'";
     


  $data=mysqli_query($dbc,$query)
  or die("Error ");

   //查询结果为空
  if (mysql_num_rows($data) < 1){
          header('Location: http://localhost/db_BigHW/index.html');
         
     }
  while($row=mysqli_fetch_array($data)){
     setcookie('Anumber',$row['Anumber']);
    
     header('Location: http://localhost/db_BigHW/pages/administer/administer.php');
    
  }


  mysqli_close($dbc);






  }



?>





</body>
</html>
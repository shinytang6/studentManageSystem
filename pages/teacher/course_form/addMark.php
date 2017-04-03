<?php
$mark=$_POST['mark'];
//接受inputMark传来的编号数组
$arr_str=$_COOKIE['array'];
$arr=unserialize($arr_str);
$cno=$_COOKIE['Cno'];
$dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
$studentNum=count($mark);

for ($i=0;$i<$studentNum;$i++){
$query="UPDATE course_student set Cmark=$mark[$i] where Sno=$arr[$i] and Cno=$cno";     //根据学生编号是顺序的而找到对应的成绩，从而更新

$data=mysqli_query($dbc,$query)
  or die("Error ");

}

   

header('Location: http://localhost/db_BigHW/pages/teacher/teacher_course.php');

?>		

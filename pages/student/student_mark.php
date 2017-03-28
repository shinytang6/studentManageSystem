<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../../library/bootstrap-select.min.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student_mark.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">
 <script type="text/javascript" src="../../library/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="../../library/bootstrap-select.min.js"></script>
 <script type="text/javascript" src="../../library/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once("../common/nav.php");

?>







  <h2>成绩查询</h2>
<form action="<?php  echo $_SERVER['PHP_SELF'];  ?>" method="post">
<select class="selectpicker " id="sel" name="grade" value="<?php echo $grade;  ?>">
  <option>大一上</option>
  <option>大一下</option>
  <option>大二上</option>
  <option>大二下</option>
  <option>大三上</option>
  <option>大三下</option>
  <option>大四上</option>
  <option>大四下</option>
</select>




  <div class="input-group col-md-3">
       <input type="text" class="form-control" placeholder="请输入字段名" name="course" value="<?php echo $course;  ?>">
            
 </div>
  <button class="btn btn-info btn-search" name="submit">查找</button>
  </form>
<div class="info">
 <table class="table table-striped">
  
  <thead>
    <tr>
      <th>课程代号</th>
      <th>课程名</th>
      <th>学分</th>
      <th>成绩</th>
      
    
    </tr>
  </thead>
  <tbody>




  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['number'];
  $grade=$_POST['grade'];
  $course=$_POST['course'];

 if(isset($_POST['submit'])){

  if(!empty($grade) and !empty($course) ){
        
        $query="SELECT  Cno,Cname,Ccredit,Cmark from course_student natural join course natural join student  where Sno=$number and Csemester='$grade' and Cname='$course'"; 
      }
  if(empty($course) )
        $query="SELECT  Cno,Cname,Ccredit,Cmark from course_student natural join course natural join student  where Sno=$number and Csemester='$grade'"; 
  if(empty($grade) )
        $query="SELECT  Cno,Cname,Ccredit,Cmark from course_student natural join course natural join student  where Sno=$number  and Cname='$course'"; 

  $data=mysqli_query($dbc,$query)
     or die("Error ");
   

  while($row=mysqli_fetch_array($data)){
  
    echo "<br>";
    echo  '
    <tr>
      <td>'.$row['Cno'].'</td>'.
      '<td>'.$row['Cname'].'</td>'.
      '<td>'.$row['Ccredit'].'</td>'.
      '<td>'.$row['Cmark'].'</td>';

     
    
  }
  



  

 }
  mysqli_close($dbc);

   
  

  ?>

</tbody>
</table>
</div>

</body>
</html>
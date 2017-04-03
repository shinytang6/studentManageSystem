<?php
$Cno =$_POST['Cno'] ;    //接受teacher_course.php传来的课程号
$Cname=$_POST['Cname'] ;   //接受teacher_course.php传来的课程名


?>
<script type="text/javascript">
	  $(document).ready(function(){
         
         $(".addMark").click(function(){
       
          htmladdmark=$.ajax({
          url:"course_form/inputMark.php",
          type:"post",
          async:false,
          data:{
          	Cno: <?php   echo $Cno  ?>,           
          	Cname:"<?php   echo $Cname ?>"     //因为课程名是字符串，所以要加个引号
          },
          error : function(){ alert("error")}
  
         });

       $(".info").html(htmladdmark.responseText);
 



         });

      });




</script>







<div class="info">

<table class="table table-striped">
  <h2><?php echo $Cname ; ?></h2>
  <h3 style="margin-left: 560px;">选课学生</h3>
  
  <thead>
    <tr>
      <th>学生编号</th>
      <th>姓名</th>
      <th>性别</th>
      <th>学院</th>
      <th>年级</th>
      <th>成绩</th>
      
      

     
    </tr>
  </thead>
  <tbody>
  <?php


   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
  $number=$_COOKIE['Tnumber'];
  $Tname=$_COOKIE['Tname'];
  $query="SELECT student.Sno,student.Sname,student.Ssex,student.Sdept,student.Sgrade,course_student.Cmark FROM teacher natural join course_student natural join  course natural join student where Cno=$Cno and Cname='$Cname'  ORDER BY student.Sno; ";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
  
    echo "<br>";
    echo  '
    <tr>
      <td>'.$row['Sno'].'</td>'.
      '<td>'.$row['Sname'].'</td>'.
      '<td>'.$row['Ssex'].'</td>'.
      '<td>'.$row['Sdept'].'</td>'.
      '<td>'.$row['Sgrade'].'</td>'.
      '<td>'.$row['Cmark'].'</td>';
      


     
    
  }
 


  mysqli_close($dbc);


  

  ?>
 </tbody>
</table>
<a class="btn addMark " style="background-color:#80A970;color:white;margin-left: 580px;">编辑成绩</a>
</div>

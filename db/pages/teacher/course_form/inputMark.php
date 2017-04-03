
<link href="../../library/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../../library/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/nav.css">
 <link rel="stylesheet" type="text/css" href="../../dist/css/student.css">

 <div class="info">
<form action="course_form/addMark.php" method="post">
<table class="table table-striped">
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
$cno =$_POST['Cno'] ;   
$cname=$_POST['Cname'] ;   





   $dbc=mysqli_connect('localhost','root','57317019','db_bighw')
  or die("Error connecting to MySQL server");
 //建立编号数组
  $arr=array();
  $number=$_COOKIE['Tnumber'];
  $Tname=$_COOKIE['Tname'];

  $query="SELECT student.Sno,student.Sname,student.Ssex,student.Sdept,student.Sgrade FROM teacher natural join course_student natural join  course natural join student where Cno=$cno and Cname='$cname'  ORDER BY student.Sno";

  $data=mysqli_query($dbc,$query)
  or die("Error ");
  while($row=mysqli_fetch_array($data)){
  //插入一个数值
    array_push($arr, $row['Sno']);
    echo  '
    <tr>
      <td>'.$row['Sno'].'</td>'.
      '<td>'.$row['Sname'].'</td>'.
      '<td>'.$row['Ssex'].'</td>'.
      '<td>'.$row['Sdept'].'</td>'.
      '<td>'.$row['Sgrade'].'</td>'.
      '<td>'.'<input type="number" name="mark[]" max="100" min="0" required>'.'</td>';    //这里的name为mark的输入保存为一个数组
      


     
    
  }
  //将编号也保存为一个数组
  $arr_str=serialize($arr);  
  setcookie('array',$arr_str);

  mysqli_close($dbc);

    
  



  ?>

 
</tbody>
</table>
<input type="submit" name="submitmark" class="btn btn-primary" value="提交成绩" style="margin-left: 590px;">
  </form>
</div>

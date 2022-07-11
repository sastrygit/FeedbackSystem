<?php
$program=$_POST['pgrm'];
$year=$_POST['yr'];
$semester=$_POST['sem'];
$facultyname=$_POST['fnm'];
$subjectcode=$_POST['code'];
$subjectname=$_POST['snm'];
$obj1=$_POST['ob1'];
$obj2=$_POST['ob2'];
$obj3=$_POST['ob3'];
$obj4=$_POST['ob4'];
$obj5=$_POST['ob5'];
$obj6=$_POST['ob6'];
$con=mysqli_connect("localhost","root","","sai");
if($con)
echo "datebase connected successfully......";
else
die("connection error".mysql_error());
mysqli_query($con,"insert into outcomeregistration values('$program','$year','$semester','$facultyname','$subjectcode','$subjectname','$obj1','$obj2','$obj3','$obj4','$obj5','$obj6')");
mysqli_close($con);
?>

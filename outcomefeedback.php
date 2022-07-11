<?php
$cay=$_POST['cay'];
$year=$_POST['yr'];
$semester=$_POST['sem'];
$program=$_POST['prgm'];
$branch=$_POST['brnc'];
$date=$_POST['dt'];
$nameoffaculty=$_POST['faculty'];
$obj1=$_POST['t1'];
$obj2=$_POST['t2'];
$obj3=$_POST['t3'];
$obj4=$_POST['t4'];
$obj5=$_POST['t5'];
$obj6=$_POST['t6'];
$obj7=$_POST['t7'];
$obj8=$_POST['t8'];
$obj9=$_POST['t9'];
$con=mysqli_connect("localhost","root","","feedbacksystem");
if($con)
echo "datebase connected successfully......";
else
die("connection error".mysql_error());
mysqli_query($con,"insert into outcomefeedback values('$cay','$year','$semester','$program','$branch','date','$nameoffaculty','$obj1','$obj2','$obj3','$obj4','$obj5','$obj6','$obj7','$obj8','$obj9')");
mysqli_close($con);
?>

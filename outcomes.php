<?php
$program=$_POST["pgrm"];
$year=$_POST["yr"];
$semester=$_POST["sem"];
$facultyname=$_POST["fnm"];
$subjectcode=$_POST["code"];
$subjectname=$_POST["snm"];
$object1=$_POST["ob1"];
$object2=$_POST["ob2"];
$object3=$_POST["ob3"];
$con=mysqli_connect("localhost","root","","sai");
if(!$con)
//echo "datebase connected successfully.....";
//else
die("connection error".mysql_error());

mysqli_query($con,"insert into subjectfeedback  values('$program','$year','$semester','$facultyname','$subjectcode','$subjectname','$object1','$object2','$object3')");
mysqli_close($con);
?>
<?php
$program=$_POST["pgrm"];
$year=$_POST["yr"];
$semester=$_POST["sem"];
$facultyname=$_POST["fnm"];
$subjectcode=$_POST["code"];
$subjectname=$_POST["snm"];
$con=mysqli_connect("localhost","root","","sai");
if($con)
echo "datebase connected successfully.....";
else
die("connection error".mysql_error());

mysqli_query($con,"insert into facultyregistration  values('$program','$year','$semester','$facultyname','$subjectcode','$subjectname')");
mysqli_close($con);
?>
<?php
$name=$_POST["sname"];
$id=$_POST["sid"];
$password=$_POST["spwd"];
$confpassword=$_POST["scpwd"];
$fathername=$_POST["sfn"];
$mothername=$_POST["smn"];
$gender=$_POST["sex"];
$dob=$_POST["dob"];
$emailid=$_POST["t4"];
$course=$_POST["course"];
$branch=$_POST["branch"];
$year=$_POST["t7"];
$cityname=$_POST["city"];
$address=$_POST["adrs"];
$mobile=$_POST["mobile"];
$con=mysqli_connect("localhost","root","","sai");
if($con)
echo "datebase connected successfully.....";
else
die("connection error".mysql_error());

mysqli_query($con,"insert into register  values('$name','$id','$password','$confpassword','$fathername','$mothername','$gender','$dob','$emailid','$course','$branch','$year','$cityname','$address','$mobile')");
mysqli_close($con);
?>
<?php
$userid=$_POST['uid'];
$password=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","sai");
if(!$con)

	die("connected error".mysql_error());

$sql="select * from loginform where userid='$userid' && password='$password'";

$rs=mysqli_query($con,$sql);

	if(mysqli_num_rows($rs)>0)
		header("Location:mainmenu.html");
	else
	{
//		echo "invalid credentials";	
		header("Location:loginform.html");
	}

mysqli_close($con);
?>
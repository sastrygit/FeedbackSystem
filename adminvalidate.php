<?php
$id=$_POST['uid'];
$pwd=$_POST['pwd'];
$x="admin";

if(($id==$x) && ($pwd==$x))
	
	header("Location:admin.html");
else
	echo "invalid credentials....check with Administrator";
?>

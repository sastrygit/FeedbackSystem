<?php
$name=$_POST['nm'];
$resadd=$_POST['rsad'];
$photo=$_POST['photo'];
$date=$_POST['dob'];
$phone=$_POST['pn'];
$email=$_POST['mail'];
$roll=$_POST['rlno'];
$entry=$_POST['yes'];
$dcplne=$_POST['des'];
$further=$_POST['fedu'];
$presemp=$_POST['ped'];
$designt=$_POST['desi'];
$orgadd=$_POST['oadrs'];
$plac=$_POST['plc'];
$sign=$_POST['sig'];
$date=$_POST['date'];

echo $name.$email.$date.$plac.$further."<br>";

$con=mysqli_connect("localhost","root","","sai");
if($con)
echo "database connected successfully.....";
else
die("connection error".mysql_error());
mysqli_query($con,"insert into alufeedback values('$name','$resadd','photo','$date','$phone','$email','$roll','$entry','$dcplne','$further','$presemp','designt','$orgadd','$plac','$sign','$date')");
mysqli_close($con);
?>
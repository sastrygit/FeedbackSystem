<html>
<body bgcolor="#DDDDDD">
<?php
if(isset($_POST["Submit"]))
{
$email=$_POST['email'];
$uid=$_POST['uid'];
$npwd=$_POST['npwd'];
require_once 'db.php';
$sql="select * from login where Email='$email' AND userid='$uid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
$sql="UPDATE login SET password='$npwd' WHERE userid='$uid'";
if(mysqli_query($conn,$sql))
echo "password successfully updated";
else
echo "try again";
}
else
echo "check your details";
}
?>
<tr><td><INPUT type="button" name="Back" value="Back" onClick="history.go(-1)"></td>
</tr>
</body>
</html>

 
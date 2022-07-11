<?php

$con=mysqli_connect("localhost","root","","sai");
if(!$con)
	die("connection error".mysql_error());

$sql="select nameoffaculty, count(nameoffaculty) as cnt, sum(obj1+obj2+obj3+obj4+obj5+obj6+obj7+obj8+obj9) as Total from outcomefeedback group by nameoffaculty";
//$sql="select nameoffaculty, AVG(obj1,obj2,obj3,obj4,obj5,obj6,obj7,obj8,obj9) as Total from outcomefeedback group by nameoffaculty";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
	//echo "records available";
?>
<html>
<img src="header.jpg" height="100" width="80%">
<table border=1><tr><th>Name of Faculty</th><th>Feedback Score</th><th>Number of Students</th></tr>
<?php	
	while($row=mysqli_fetch_assoc($rs))
	{ $x=$row["Total"]/9; $y=$x/$row["cnt"];?>
		<tr>
		
		<td><?php echo $row["nameoffaculty"]; ?></td> <td><?php echo $y; ?> </td><td><?php echo $row["cnt"];?></td> </tr>
<?php
	}
	
mysqli_close($con);
?>

</table>
<input type="button" name="print" value="print" onClick="window.print()">
</html>
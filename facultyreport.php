<?php

$cay=$_POST['cay'];
$year=$_POST['yr'];
$semester=$_POST['sem'];
$program=$_POST['prgm'];
$branch=$_POST['brnc'];
$date=$_POST['dt'];
$nameoffaculty=$_POST['faculty'];
$report=$_POST['rpt'];

$con=mysqli_connect("localhost","root","","sai");
if(!$con)
	die("connection error".mysql_error());


$sql="select nameoffaculty, count(nameoffaculty) as cnt, sum(obj1+obj2+obj3+obj4+obj5+obj6+obj7+obj8+obj9) as Total from outcomefeedback where nameoffaculty='$nameoffaculty'";

$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
	
	while($row=mysqli_fetch_assoc($rs))
	{ 
		?>
<html>
<center><img src="header.jpg" height="100" width="80%">
<body bgcolor="cyan">
<center>
<form name="f2">
<h4><b><u><center>ASSIGMENT OF LEARING OUTCOMES FOR COURCE</center></u></b></h4><br>
<table border="1"align="center"width=90%>
<tr><td>CAY:<select name="cay">
<option><?php echo $cay; ?></option>
</select>
</td><td>YEAR:<select name="yr">
<option><?php echo $year; ?></option>
</select>
</td><td>SEM:<select name="sem">
<option><?php echo $semester; ?></option>
</select>
</tr></tr>
<tr><td>PROGRAM:<select name="prgm">
<option><?php echo $program; ?></option>
</select>
</td>
<td>BRANCH:<select name="brnc">
<option><?php echo $branch; ?></option>
</select>
</td>
<td>DATE:<input type="text" name='dt' value=<?php echo $date; ?>></td></tr>
<tr><td>NAME OF FACULTY:
<select name="faculty">
<option><?php echo $row["nameoffaculty"]; ?></option>
</select>
</td>
<td colspan="2">
score<input type="text" name="scre" value=<?php $x=$row["Total"]/9; $y=$x/$row["cnt"]; echo $y; ?>>
</td>
</tr>


<?php
	}
	
mysqli_close($con);
?>
<input type="button" name="print" value="print" onClick="window.print()"><input type="reset" value="clear"</table>

</center>
</body>
</form>
</html>

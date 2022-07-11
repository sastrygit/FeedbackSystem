<html>
<head>
</head>
<body bgcolor="cyan">
<center>
<form name="f1" method="POST" action="http://localhost/feedback/report.php">
<div align="center"><img src="header.jpg" height="120" width="1000"></div> 
<h4><b><u><center>ASSIGMENT OF LEARING OUTCOMES FOR COURCE</center></u></b></h4><br>
<table border="1"align="center"width=90%>
<tr><td>CAY:<select name="cay">
<option>2018-2019</option>
<option>2017-2018</option>
<option>2016-2017</option>
<option>2015-2016</option>
<option>2014-2015</option>
</select>
</td><td>YEAR:<select name="yr">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</td><td>SEM:<select name="sem">
<option>1</option>
<option>2</option>
</select>
</tr></tr>
<tr><td>PROGRAM:<select name="prgm">
<option>B.tech</option>
<option>M.tech</option>
</select>
</td>
<td>BRANCH:<select name="brnc">
<option>CSE</option>
<option>EEE</option>
<option>ECE</option>
<option>MEC</option>
<option>CIV</option>
</select>
</td>
<td>DATE:<input type="date" name='dt' value=></td></tr>
<tr><td>NAME OF FACULTY:
<select name="faculty">
<option>R.V.L.S.N.Sastry</option>
<option>Giridhar</option>
<option>Bhaskar rao</option>
<option>Ganesh</option>
<option>sai kiran</option>
<option>smitha rani sahu</option>
<option>Ramya</option>
<option>Aswini</option>
<option>Lakshmi bala</option>
</select>
 </td>
<td>score<input type="text" name="scre" value="<?php echo $x;?>"></td>
</tr>
</table>

<input type="submit" name="send" value="submit">
<input type="reset" name="clear" value="Reset">

</center>
</body>
</form>
</html>





<?php
$cay=$_POST['cay'];
$oyear=$_POST['yr'];
$semester=$_POST['sem'];
$program=$_POST['prgm'];
$branch=$_POST['brnc'];
$date=$_POST['dt'];
$nameoffaculty=$_POST['faculty'];
$report=$_POST['rpt'];
$con=mysqli_connect("localhost","root","","feedbacksystem");

if(!$con)
	die("connection error".mysql_error());


$sql="select nameoffaculty, sum(obj1+obj2+obj3+obj4+obj5+obj6+obj7+obj8+obj9) as Total from outcomefeedback where nameoffaculty= '$nameoffaculty'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
	//echo "records available";
	while($row=mysqli_fetch_assoc($rs))
	{
		//echo $row["nameoffaculty"]."---->".$row["Total"]."<br/>";
		$x=$row["Total"];

	}

mysqli_close($con);
?>

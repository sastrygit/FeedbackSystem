<?php
session_start();
if(!isset($_SESSION["id"]))
header("location:Login page.php");
?>
<html>
<body bgcolor="#DDDDDD">
<body fgcolor="blue">
<table  align="center"  border="0">
<tr>
<td align='right' colspan=3><a href="logout.php"  target="right">logout</a></td>
</tr>
<tr>
<td align="center">
<a href="demo.php" target="right"><fontcolor="blue">Attendance Monitor
</font>
</a>
</td><br><br><br><br>
<td align="center">
<a href="ret1.php" target="right"><font color="blue">Attendance Retrieve
</font>
</a><br><br><br><br>
<td align="center">
<a href="entry.php" target="right"><font color="blue">Student Entry
</font>
</a>
</td><br><br><br><br>
</tr>

</table>
</body>
</html>
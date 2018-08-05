<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location: deladmin.php');
}

?>
<html>
<head></head>
<title></title>
<body>

<?php
$sql="SELECT * FROM last_entry WHERE id='1'";
$result=mysqli_query($connection,$sql);
if($row=mysqli_fetch_array($result))
{
echo '<b>Last Entry for Admission ';
echo "</br>";
echo "&nbsp";
echo $row['adm_no'];
}
else
{
echo "Last Entry not Found";
}
?>
<br><br><br><br>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<br><br>
<table border="20" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="enroll_name_del_pro.php">
<TR>

<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;
<input type="submit" name="delete" value="Submit" style="height:30px; width:120px">

&nbsp;&nbsp;
</form>
</table>
</center>
</body>
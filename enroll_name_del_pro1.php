<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location: default.php') ;
}
?>
<table border="20" height="100" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="enroll_name_del_confirm.php" method="POST" autocomplete="off">
<TR>
<TD><b>User-Id</b></TD>
<TD>
<input type="email" name="uid" style="width:180px;height:20px" required>
</TD>
</TR>

<TR>
<TD><b>Password</b></TD>
<TD>
<input type="password" name="pwd" style="width:180px;height:20px" required>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log-In" name="loger" style="height:30px;width:80px">
</form>
</table>
<?php
if(isset($_POST['loger']))
{
$uid = mysqli_real_escape_string($connection,$_POST['uid']);
$pwd = mysqli_real_escape_string($connection,$_POST['pwd']);
$result = mysqli_query($connection,"SELECT * FROM principal WHERE uid='$uid' AND pwd='$pwd'");

if($row = mysqli_fetch_array($result))
{
$_SESSION['stduid']=$row['uid'];//stores userid session
$_SESSION['stdpwd']=$row['pwd'];//stores password session
header('location:dashboard.php');
}
else
{
echo "<center>"."Invalid Username or Password"."</center>";
}
}
?>
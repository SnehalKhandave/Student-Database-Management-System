<?php
include_once("bg.php");
include_once("config.php");
session_start();
ob_start();

?>
</br></br></br></br></br>
</br></br></br><center>
<table border="20" height="100" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="deladmin.php" method="POST" autocomplete="off">
<TR>
<TD><b>Master-Password</b></TD>
<TD>
<input type="password" name="mpwd" style="width:180px;height:20px" required autofocus>
</TD>
</TR>

<TR>
<TD></TD>
<TD>
&nbsp;&nbsp;
<input type="submit" value="Continue" name="master" style="height:30px;width:80px">
&nbsp;
&nbsp;<input type="button" value="Cancel" style="height:30px;width:80px" onclick="window.location ='dashboard.php'">
</form>
</table>
<?php
if(isset($_POST['master']))
{
$s=$_SESSION['stduid2'];
$mpwd = mysqli_real_escape_string($connection,$_POST['mpwd']);
$result = mysqli_query($connection,"SELECT * FROM user WHERE eid='$s' AND mpwd='$mpwd'");

if($row = mysqli_fetch_array($result))
{
$_SESSION['maspwd2']=$row['mpwd'];//stores password session
header('location:enroll_name_del.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Master-Password!");</script>';
}
}
?>
</center>
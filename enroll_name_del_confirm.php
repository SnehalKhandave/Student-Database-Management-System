<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location:deladmin.php') ;
}
?>
<?php
if(isset($_GET['deleteconfirm']))
{
$admno=$_GET['admno'];
$sql1="DELETE FROM stud_id WHERE adm_no='$admno'";
$result1=mysqli_query($connection,$sql1);

if($result1)
{
//Admission delete
$sql2="DELETE FROM stud_adm WHERE adm_no='$admno'";
$result2=mysqli_query($connection,$sql2);


//extra1
$sql5="DELETE FROM extra1 WHERE adm_no='$admno'";
$result5=mysqli_query($connection,$sql5);

//extra2
$sql6="DELETE FROM extra2 WHERE adm_no='$admno'";
$result6=mysqli_query($connection,$sql6);

//extra3
$sql7="DELETE FROM extra3 WHERE adm_no='$admno'";
$result7=mysqli_query($connection,$sql7);

echo "</br></br></br></br></br></br></br></br>";
echo "<center><h3>"."Deleted Successfully"."</h3></center>";
echo '<center><input type="button" style="height:30px" value="Goto Home" onclick="window.location =\'dashboard.php\'" />';
}
else
{
echo "<center><h3>"."Failed to Delete/ Adminssion Number not Exists"."</h3></center>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Retry" onclick="window.location =\'enroll_num_chang.php\'" /></p>';
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Goto Home" onclick="window.location =\'dashboard.php\'" /></p>';
}
}
else
{
echo "</br></br></br></br></br></br></br></br>";
echo "<center><h3>"."Unauthorized Entry"."</h3></center>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Goto Main Page" onclick="window.location =\'dashboard.php\'" /></p>';
}
ob_end_flush();

?>
<?php
unset($_SESSION['maspwd2']);
?>
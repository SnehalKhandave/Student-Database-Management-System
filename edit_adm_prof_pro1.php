<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}

?>

<?php
if(isset($_POST['upd']))
{
$adm_no=mysqli_real_escape_string($connection,$_POST['adm_no']);
$tc_issue=mysqli_real_escape_string($connection,$_POST['tc_issue']);
$year=mysqli_real_escape_string($connection,$_POST['year']);
$twnvill=mysqli_real_escape_string($connection,$_POST['twnvill']);
$dob=mysqli_real_escape_string($connection,$_POST['dob']);
$gen=mysqli_real_escape_string($connection,$_POST['gen']);
$religion=mysqli_real_escape_string($connection,$_POST['religion']);
$caste=mysqli_real_escape_string($connection,$_POST['caste']);
$comunit=mysqli_real_escape_string($connection,$_POST['comunit']);
$fname=mysqli_real_escape_string($connection,$_POST['fname']);
$f_ed_qua=mysqli_real_escape_string($connection,$_POST['f_ed_qua']);
$f_add_pin=mysqli_real_escape_string($connection,$_POST['f_add_pin']);
$ph_no=mysqli_real_escape_string($connection,$_POST['ph_no']);
$cls_adm=mysqli_real_escape_string($connection,$_POST['cls_adm']);
$cls_sec=mysqli_real_escape_string($connection,$_POST['cls_sec']);
$grop_adm=mysqli_real_escape_string($connection,$_POST['grop_adm']);
$med_adm=mysqli_real_escape_string($connection,$_POST['med_adm']);
$dat_adm=mysqli_real_escape_string($connection,$_POST['dat_adm']);


$sql="UPDATE stud_adm SET tc_issue='$tc_issue',year='$year',twnvill='$twnvill',dob='$dob',gen='$gen',religion='$religion',caste='$caste',comunit='$comunit',fname='$fname',f_ed_qua='$f_ed_qua',
f_add_pin='$f_add_pin',ph_no='$ph_no',cls_adm='$cls_adm',cls_sec='$cls_sec',grop_adm='$grop_adm',med_adm='$med_adm',dat_adm='$dat_adm' WHERE adm_no='$adm_no'";

$result= mysqli_query($connection,$sql);

if($result)
{
echo "<br><br><br><br><br><center><h3>Updated Successfully" ;
}
else
{
echo "Failed to Update";
}
}
?>
<br><br>
<center>
<input type="button" style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
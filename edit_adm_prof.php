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
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<h3>Edit by Admission number</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="edit_adm_prof_pro.php">
<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</TD>
<TD>
<input type="submit" name="edit" value="Search" style="height:30px;width:90px">
</form>
</table>
<h3>Edit by Student Name</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="edit_adm_prof.php">
<TR>
<TD>
<b>STUDENT NAME:</b>
</TD>
<TD>
<input type="text" name="name" style="width:180px;height:20px" required>
</TD>
<TD>
<input type="submit" name="editbyname" value="Search" style="height:30px;width:90px">
</form>
</table>
<br>
<?php
if(isset($_GET['editbyname']))
{
$name=mysqli_real_escape_string($connection,$_GET['name']);
$sql = mysqli_query($connection,"SELECT * FROM stud_adm WHERE name LIKE '%$name%'");
echo mysqli_num_rows($sql);
echo "<b>"." result found";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
<tr>
<th>Photo</th>
<th>Admission No.</th>
<th>Name</th>
<th>More Details</th></tr>";
//And we display the results
while($row = mysqli_fetch_assoc($sql))
{
echo "<tr bgcolor='#E5F4F4'>";
$admno=$row['adm_no'];
echo "<td width='3%'>"."<center><img width='120' height='120' src=images/student/".$row['img'].">";
echo "<td width='3%'>"."<center>".$row['adm_no']."</td>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>";
echo "<center><a href='edit_adm_prof_pro.php?admno=$admno&edit=Search'>Edit details</a>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
</center>
</body>
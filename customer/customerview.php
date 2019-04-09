<?php
session_start();
include("../config.php");
include("header1.php");
?>

<h3 class=" my-lg-4 my-4 textfont">Update Your Details</h3>
<div align="center">
 <?php
$uid=$_SESSION["u_id"];
$utype=$_SESSION["u_type"];
if($utype=="2"){
$result=mysqli_query($con,"select * from tbl_customer where c_id=$uid");
echo "<table border='3'>";
echo"<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>Edit</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
	echo"<td>".$row['c_name']."</td>";
	echo"<td>".$row['c_gender']."</td>";
	echo"<td>".$row['c_dob']."</td>";
	echo"<td>".$row['c_add']."</td>";
	echo"<td>".$row['c_email']."</td>";
	echo"<td>".$row['c_ph']."</td>";
	echo"<td>".$row['cname']."</td>";
	echo"<td>".$row['cpass']."</td>";
	echo"<td><a href='customeredit.php?bid=".$row['c_id']."'>
	<div class='fa fa-edit'>Edit</div></a></td>";
	
    echo"</tr>";
}
echo"</table>";
}
elseif($utype=3)
{
$result=mysqli_query($con,"select * from tbl_customer where c_id=$uid");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['c_name']."</td>";
	echo"<td>".$row['c_gender']."</td>";
	echo"<td>".$row['c_dob']."</td>";
	echo"<td>".$row['c_add']."</td>";
	echo"<td>".$row['c_email']."</td>";
	echo"<td>".$row['c_ph']."</td>";
	echo"<td><a href='customeredit.php?bid=".$row['c_id']."'><div class='fa fa-edit'>
	Edit
	</div></a></td>";
	echo"</tr>";
}
echo"</table>";
}
else
{
$result=mysqli_query($con,"select * from tbl_customer where c_id=$uid");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['c_name']."</td>";
	echo"<td>".$row['c_gender']."</td>";
	echo"<td>".$row['c_dob']."</td>";
	echo"<td>".$row['c_add']."</td>";
	echo"<td>".$row['c_email']."</td>";
	echo"<td>".$row['c_ph']."</td>";
	echo"<td>".$row['cname']."</td>";
	echo"<td>".$row['cpass']."</td>";
	echo"<td><a href='customeredit.php?bid=".$row['c_id']."'><div class='fa fa-edit'>
	Edit
	</div></a></td>";
	echo"</tr>";
}
echo "</table>";
}
?>
</table><br/>

<a class='btn btn-primary donebtn' href='index.php'>Done</a>
</div>
<?php
include("footer.php");
?>
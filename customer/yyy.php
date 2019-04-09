<?php
include("config.php");
$result=mysqli_query($con,"select * from tbl_customer");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>User Name</th>";
echo "<th>Status</th>";
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
	echo"<td><a href='customerdelete.php?bid=".$row['c_id']."'>delete</a></td>";
	echo"<td><a href='customeredit.php?bid=".$row['c_id']."'>edit</a></td>";
	echo"</tr>";
}
?>
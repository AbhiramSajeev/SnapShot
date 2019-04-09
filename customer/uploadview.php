<?php
include("../config.php");
session_start();
$cid=$_SESSION["u_id"];
$utype=$_SESSION["u_type"];
include("header1.php");
?>
        
<h3 class="textfont my-lg-4 my-4">Uploading Details</h3>
<div align="center">
<?php
if($utype==2){
	$result=mysqli_query($con,"select * from tbl_photograph p where p.c_id=$cid and status=1");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Amount</th>";
echo "<th>Description</th>";
echo "<th>delete</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ph_name']."</td>";
	echo"<td><img src='photoupload/".$row['photo']."'style='height:100px;width:100px'/></td>";
	echo"<td>".$row['p_date']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>".$row['p_desc']."</td>";
	echo"<td><a href='photodelete.php?bid=".$row['ph_id']."'> <div class='fa fa-remove'>Delete </div></a></td>";
	echo"</tr>";
}
echo"</table>";
}
elseif($utype==3){
	$result=mysqli_query($con,"select * from tbl_painting p where p.c_id=$cid and status= 1");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Amount</th>";
echo "<th>Description</th>";
echo "<th>delete</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['pa_name']."</td>";
	echo"<td><img src='paintingupload/".$row['painting']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['p_date']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>".$row['p_des']."</td>";
	echo"<td><a href='paintingdelete.php?bid=".$row['p_id']."'><div class='fa fa-remove'>Delete </div></a></td>";
	echo"</tr>";
}	
echo"</table>";
}
else
{
}
?>
</div>
<?php
include("footer.php");
?>
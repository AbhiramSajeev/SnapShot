 <?php
 include("header.php");
include("../config.php");
$result=mysqli_query($con,"select * from tbl_painting p,tbl_category c,tbl_subcategory s where p.ca_id=c.ca_id and p.sca_id=s.sca_id and p.status=0");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Category Name</th>";
echo "<th>Subcategory</th>";
echo "<th>Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Description</th>";
echo "<th>accept</th>";
echo "<th>reject</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ca_name']."</td>";
	echo"<td>".$row['sca_name']."</td>";
	echo"<td>".$row['pa_name']."</td>";
	echo"<td><img src='../customer/paintingupload/".$row['painting']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['p_date']."</td>";
	echo"<td>".$row['p_des']."</td>";
	echo"<td><a href='paintingaccept.php?abid=".$row['p_id']."'>accept</a></td>";
	echo"<td><a href='paintingreject.php?rid=".$row['p_id']."'>reject</a></td>";
	echo"</tr>";
}
include("footer.php");
?>
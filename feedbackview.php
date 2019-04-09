 <?php
include("config.php");
$result=mysqli_query($con,"select * from tbl_feedback where status=0");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Date</th>";
echo "<th>Comment</th>";
echo "<th>View</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['f_date']."</td>";
	echo"<td>".$row['comment']."</td>";
	echo"<td><a href='feedbackview.php?bid=".$row['f_id']."'>View</a></td>";
	echo"<tr>";
}
?>
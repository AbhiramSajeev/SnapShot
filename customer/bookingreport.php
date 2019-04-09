<?php
session_start();
include("../config.php");
include("header1.php");
$dchrge=50;
?>
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
		<h3 class="tittle-w3layouts my-lg-4 my-4 textfont">Booking Details</h3>
				<div class="row">
<p>
<table style="width:100%">
<tr>
<td style="text-align:center" >
<h3 style="width:50%">PAINTING</h3>
<?php
$cid=$_SESSION["u_id"];
$result=mysqli_query($con,"select * from tbl_booking b,tbl_painting p,tbl_payment pay where b.c_id=$cid and b.p_id=p.p_id and b.b_id=pay.b_id and b.status=2");
echo "<table border='2'>";
echo"<tr>";
echo "<th>Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Quatity</th>";
echo "<th>Price</th>";
echo "<th>Delivery Charge</th>";
echo "<th>Total</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
	echo"<td>".$row['pa_name']."</td>";
	echo"<td><img src='paintingupload/".$row['painting']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['b_date']."</td>";
	echo"<td>".$row['quantity']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>$dchrge</td>";
	echo"<td>".$row['Amount']."</td></tr>";
}
echo "</table>";
?>
</td>
<td style="text-align:center">
<h3 style="width:50%">PHOTOGRAPHS</h3>
<?php
$result=mysqli_query($con,"select * from tbl_booking2 b,tbl_photograph p,tbl_payment1 pay where b.c_id=$cid and b.ph_id=p.ph_id and b.b_id=pay.b_id and b.status=2");
echo "<table border='2'>";
echo"<tr>";
echo "<th>Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Quatity</th>";
echo "<th>Price</th>";
echo "<th>Delivery Charge</th>";
echo "<th>Total</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
	echo"<td>".$row['ph_name']."</td>";
	echo"<td><img src='photoupload/".$row['photo']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['b_date']."</td>";
	echo"<td>".$row['quantity']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>$dchrge</td>";
	echo"<td>".$row['Amount']."</td></tr>";
}
echo "</table>";
?>
</td>
</tr>
</table>
</p>
<?php include("footer.php"); ?>
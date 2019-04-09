<?php
include("../config.php");
include("header.php");
?>
<div class="parallax" style="min-height:200px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
 <div id="div_print" align="center">

<h3>ACCEPTED PAINTING</h3>
<?php
$result=mysqli_query($con,"select * from tbl_painting p,tbl_category c,tbl_subcategory s where p.ca_id=c.ca_id and p.sca_id=s.sca_id and status= 1");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Category Name</th>";
echo "<th>Subcategory</th>";
echo "<th>Product Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Amount</th>";
echo "<th>Description</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ca_name']."</td>";
	echo"<td>".$row['sca_name']."</td>";
	echo"<td>".$row['pa_name']."</td>";
	echo"<td><img src='../customer/paintingupload/".$row['painting']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['p_date']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>".$row['p_des']."</td>";
	echo"</tr>";
}
echo"</table>";
?>
</div>
<input style="align-content:center;margin-left:500px" name="b_print" type="button" class="ipt" id="button"  onClick="printdiv('div_print')" value=" Print ">
<script>
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body><div style='min-height:10px;margin-bottom:34px;'><h3 style='align-content:center;color:#1550D8;text-align:center;padding-top:36px;'>CHANNEL REPORT</h3></div>";

var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}

</script>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<?php include("footer.php");?> 

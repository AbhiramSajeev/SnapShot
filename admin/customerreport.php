<div class="form-group">
 <?php
include("../config.php");

include("header.php");?>
<div class="parallax" style="min-height:200px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
 <div id="div_print" align="center">

<h2>CUSTOMER REPORT</h2>
<?php
$result=mysqli_query($con,"select * from tbl_customer");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";

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

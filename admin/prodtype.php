<?php
include("header.php");
include("../config.php");
?>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="prodsave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT</h3>
  <div class="form-group">
    <label for="name">Product Name:</label>
    <input type="text" class="form-control" name="txt_pname" required>
  </div>
  <div class="form-group">
    <label for="pwd">Product Description :</label>
    <textarea class="form-control" name="txt_pdes"></textarea>
  </div>
   <?php
include("../config.php");
$result=mysqli_query($con,"select * from tbl_producttype");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Product name</th>";
echo "<th>Product description</th>";
echo "<th>Delete</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['pt_name']."</td>";
	echo"<td>".$row['pt_des']."</td>";
	echo"<td><a href='ptypedelete.php?bid=".$row['pt_id']."'>Delete</a></td>";
	echo"<td><a href='ptypeedit.php?bid=".$row['pt_id']."'><i class='fa fa-edit'style='color:green'>&nbsp;EDIT</i></a></td>";
	echo"</tr>";
}
?>
  
 <button type="submit" class="btn btn-primary" name="btn_psave" style="float: right">Save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<?php
include("footer.php");
?>
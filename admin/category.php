<html>
<head>

</head>
<body>
<?php

include("header.php");
?>

<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="savecategory.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT CATEGORY</h3>
  <div class="form-group">
    <label for="name">Category Name :</label>
    <input type="text" class="form-control" name="txt_caname" required>
  </div>
  <div class="form-group">
    <label for="pwd">Category Description :</label>
    <textarea class="form-control" name="txt_cades" ></textarea>
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_casave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" name="btn_caclear" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">

    <?php
include("../config.php");
$result=mysqli_query($con,"select * from tbl_category");
echo "<table border='2'>";
echo "<tr>";
echo "<th>Category name</th>";
echo "<th>description</th>";
echo "<th>Delete</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ca_name']."</td>";
	echo"<td>".$row['ca_des']."</td>";
	echo"<td><a href='categorydelete.php?bid=".$row['ca_id']."'>DELETE</i></a></td>";
	echo"<td><a href='categoryedit.php?bid=".$row['ca_id']."'><i class='fa fa-edit'style='color:green'>&nbsp;EDIT</i></a></td>";
	echo"</tr>";
}
?>
<?php include("footer.php");?>
  </div>
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<?php
include("footer.php");
?>
</body>
</html>
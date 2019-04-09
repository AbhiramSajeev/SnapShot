<?php
include("header.php");
include("../config.php");
?>

<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="subcatsave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#F10A0E">ADD SUBCATEGORY</h3>
  <div class="form-group">
   <label for="name">Category Name :</label>
    <select name="category" required>
    <option value="0">----Select----</option>
          <?php
               $result=mysqli_query($con,"select * from tbl_category");
                  while($row=mysqli_fetch_array($result))
                    {
           ?>
                       <option value="<?php echo $row['ca_id']?>">
						<?php echo $row['ca_name'];?>
						</option>
<?php
}
?>         
</select>
  </div>
  <div class="form-group">
    <label>Subcategory Name:</label>
    <input type="text" class="form-control" name="txt_subcat" required></textarea>
  </div>
  <?php
include("../config.php");
$result=mysqli_query($con,"select * from tbl_subcategory s, tbl_category c where c.ca_id = s.ca_id");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Category name</th>";
echo "<th>sub category name</th>";
echo "<th>Delete</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ca_name']."</td>";
	echo"<td>".$row['sca_name']."</td>";
	echo"<td><a href='subcatdelete.php?bid=".$row['sca_id']."'><i class='fa fa-trash'style='color:green'>&nbsp;DELETE</i></a></td>";
	echo"<td><a href='subcatedit.php?bid=".$row['sca_id']."'><i class='fa fa-edit'style='color:green'>&nbsp;EDIT</i></a></td>";
	echo"</tr>";
}
?>
  
 <button type="submit" class="btn btn-primary" name="btn_subsave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
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
   
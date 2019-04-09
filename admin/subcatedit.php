<?php
include("header.php");
include("../config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_subcategory where sca_id=$id");
	$row=mysqli_fetch_array($result);
	$cat_id=$row['ca_id'];
	$catname=$row['sca_name'];
}
?>


<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="subcatupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT CATEGORY</h3>
  <div class="form-group">
    <label for="name">Category Name :</label>
    <input type="hidden" class="form-control" name="txt_scaid" value="<?php echo $id; ?>">
    <select name="category" required>
          <?php
               $result=mysqli_query($con,"select * from tbl_category");
                  while($row=mysqli_fetch_array($result))
                    {
						$selected="";
						if($cat_id==$row['ca_id'])
						{
							$selected="selected";
						}
           ?>
                       <option <?php echo $selected; ?> value="<?php echo $row['ca_id']?>">
                        <?php echo $row['ca_name'];?>
                        </option>
<?php
}
?>         
</select> 
</div>
<div class="form-group">
    <label>Subcategory Name:</label>
     <input type="text" class="form-control" name="txt_scaname" value="<?php echo $catname; ?>">
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_subupdate" style="float: right">update</button>
<button type="reset" class="btn btn-warning" name="btn_caclear" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
</div>
<?php
include("footer.php");
?>
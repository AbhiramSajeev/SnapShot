<?php
include("header.php");
include("../config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_category where ca_id=$id");
	$row=mysqli_fetch_array($result);
	$catname=$row['ca_name'];
	$catdes=$row['ca_des'];
}
?>


<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="categoryupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT CATEGORY</h3>
  <div class="form-group">
    <label for="name">Category Name :</label>
    <input type="hidden" class="form-control" name="txt_caid" value="<?php echo $id; ?>">
    <input type="text" class="form-control" name="txt_caname" value="<?php echo $catname; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Category Description :</label>
    <textarea class="form-control" name="txt_cades" ><?php echo $catdes;?></textarea>
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_caupdate" style="float: right">update</button>
<button type="reset" class="btn btn-warning" name="btn_caclear" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
</div>
<?php
include("footer.php");
?>
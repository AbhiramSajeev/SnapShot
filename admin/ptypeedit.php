<?php
include("header.php");
include("../config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_producttype where pt_id=$id");
	$row=mysqli_fetch_array($result);
	$ptname=$row['pt_name'];
	$ptdes=$row['pt_des'];
}
?>


<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="ptypeupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT CATEGORY</h3>
  <div class="form-group">
    <label for="name">Product Name :</label>
    <input type="hidden" class="form-control" name="txt_ptid" value="<?php echo $id; ?>">
    <input type="text" class="form-control" name="txt_pname" value="<?php echo $ptname; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Product Description :</label>
    <textarea class="form-control" name="txt_ptdes" ><?php echo $ptdes;?></textarea>
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_ptupdate" style="float: right">update</button>
<button type="reset" class="btn btn-warning" name="btn_caclear" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
</div>
<?php
include("footer.php");
?>
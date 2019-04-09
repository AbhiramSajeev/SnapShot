<?php
include("header.php");
include("../config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_usertype where ut_id=$id");
	$row=mysqli_fetch_array($result);
	$utname=$row['ut_name'];
}
?>


<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="20%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="utupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD PRODUCT CATEGORY</h3>
  <div class="form-group">
    <label for="name">User Type :</label>
    <input type="hidden" class="form-control" name="txt_utid" value="<?php echo $id; ?>">
    <input type="text" class="form-control" name="txt_utname" value="<?php echo $utname; ?>">
  
 <button type="submit" class="btn btn-primary" name="btn_utupdate" style="float: right">update</button>
<button type="reset" class="btn btn-warning" name="btn_caclear" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
</div>
<?php
include("footer.php");
?>
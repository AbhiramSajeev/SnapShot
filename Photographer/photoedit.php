<?php
include("../config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_photograph where ph_id=$id");
	$row=mysqli_fetch_array($result);
	$caid=$row["ca_id"];
	$subcaid=$row["sca_id"];
	$pname=$row['ph_name'];
    $photo=$row['photo'];
	$pdate=$row["p_date"];
	$amunt=$row["amount"];
	$pdes=$row["p_desc"];
}
?>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="photoupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
 <div class="form-group">
  <label for="name">Category Name :</label>
    <select name="category" required>
          <?php
               $result=mysqli_query($con,"select * from tbl_category");
                  while($row=mysqli_fetch_array($result))
                    {
                     $selected="";
						if($caid==$row['ca_id'])
						{
							$selected="selected";
						}
           ?>
                       <option <?php echo $selected; ?> value="<?php echo $row['ca_id']?>">
						<?php echo $row['ca_name'];?>
						</option>
<?php
}
?></select></div>        
 <div class="form-group">
  <label for="name">Subcategory Name :</label>
    <select name="subcategory" required>
          <?php
               $result=mysqli_query($con,"select * from tbl_subcategory");
                  while($row=mysqli_fetch_array($result))
                    {
                       $selected="";
						if($subcaid==$row['sca_id'])
						{
							$selected="selected";
						}
           ?>
                       <option <?php echo $selected; ?> value="<?php echo $row['sca_id']?>">
						<?php echo $row['sca_name'];?>
						</option>
                      
<?php
}
?>  </select></div>       
     
   <div class="form-group">
   <label for="name">Name:</label>  
   <input type="text" name="txt_phname" value="<?php echo $pname; ?>" required>
   </div>
    <div class="form-group">
   <label for="name">photo:</label>  
   <input type="file" name="txt_photo" value="<?php echo $photo; ?>" required>
   </div>
    <div class="form-group">
     <label> Date</label>
      <input type="date" name="txt_date" value="<?php echo $pdate; ?>">
</div>
 <div class="form-group">
     <label>Amount</label>
      <input type="text" name="txt_date" value="<?php echo $amunt; ?>">
</div>
 <div class="form-group">
<label> Description</label>
<textarea type="text" name="txt_des"><?php echo $pdes; ?></textarea>
</div>
<button type="submit" class="btn btn-primary" name="btn_update" style="float: right">update</button>
</form></div></td></table></div>
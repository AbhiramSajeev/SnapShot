<?php
include("config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_customer where c_id=$id");
	$row=mysqli_fetch_array($result);
	$name=$row["c_name"];
	$gender=$row["c_gender"];
	$dob=$row["c_dob"];
	$add=$row["c_add"];
	$email=$row["c_email"];
	$ph=$row["c_ph"];
	$cname=$row["cname"];
	$pass=$row["cpass"];
}
?>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="customerupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
 <div class="form-group">
  <label for="name">Full Name :</label>
   <input type="hidden" class="form-control" name="txt_cid" value="<?php echo $id; ?>">
   <input type="text" class="form-control" name="txt_name" value="<?php echo $name; ?>"required>
   </div>
    <div class="form-group">
    <label for="name">Gender:</label>
    <label><input type="radio" name="gender" value="male" id="Radio_0" <?php if($gender=="male"){ echo "checked";}?>>Male</label>
     <label><input type="radio" name="gender" value="female" id="Radio_1" <?php if($gender=="female"){ echo "checked";}?>>Female</label>
     <br>
</div>
 <div class="form-group">
<label>Date Of Birth:</label>
  <input type="date" name="txt_date" value="<?php echo $dob; ?>">
</div>
 <div class="form-group">
    <label>Address :</label>
 <textarea class="form-control" name="txt_address" ><?php echo $add; ?></textarea>
  </div>
   <div class="form-group">      
      <label for="name">Email:</label>
     <input type="email" name="txt_uemail" value="<?php echo $email; ?>">
   </div>
    <div class="form-group">
  <label for="name">Phone number:</label>   
  <input type="tel" name="txt_tel" value="<?php echo $ph; ?>">
  </div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_cname" value="<?php echo $cname; ?>">
</div>
 <div class="form-group">
<label> Password</label>
<input type="text" name="txt_cpwd" value="<?php echo $pass; ?>">
</div>
 <button type="submit" class="btn btn-primary" name="btn_cupdate" style="float: right">update</button>
 </form></div></td></table></div>
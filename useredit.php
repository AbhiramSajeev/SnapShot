 <?php
include("config.php");
if(isset($_GET["bid"]))
{
	$id=$_GET["bid"];
	$result=mysqli_query($con,"select * from tbl_user where u_id=$id");
	$row=mysqli_fetch_array($result);
	$name=$row["u_name"];
	$gender=$row["u_gender"];
	$dob=$row["u_dob"];
	$add=$row["u_add"];
	$email=$row["u_email"];
	$utid=$row["ut_id"];
	$uph=$row["u_ph"];
	$uach=$row["u_ach"];
	$uname=$row["uname"];
	$upass=$row["upass"];
}
?>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">

<form action="userupdate.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
   <div class="form-group">
   <label for="name">Full Name :</label>
     <input type="hidden" class="form-control" name="txt_uid" value="<?php echo $id; ?>">
    <input type="text" class="form-control" name="txt_name" value="<?php echo $name; ?>">
  </div>
    <div class="form-group">
   <label for="name">Gender:</label>
    <label>
       <input type="radio" name="gender" value="male" id="Radio_0" <?php if($gender=="male"){ echo "checked";}?>>
       Male</label>
     <label>
       <input type="radio" name="gender" value="female" id="Radio_1" <?php if($gender=="female"){ echo "checked";}?>>
       Female</label>
     <br>
    </div>

 <div class="form-group">
 <label for="name">Date Of Birth:</label>
   <input type="date" name="txt_date" value="<?php echo $dob; ?>">
 </div>
  <div class="form-group">
    <label for="pwd">Address :</label>
 <textarea  class="form-control" name="txt_address"><?php echo $add; ?></textarea>
  </div>
    <div class="form-group">
    <label for="name">Email:</label>
       <input type="email" name="txt_uemail" value="<?php echo $email; ?>">
     </div>
 <div class="form-group">
    <label for="name">User Type:</label>
    <select name="utype" required>
          <?php
               $result=mysqli_query($con,"select *from tbl_usertype");
                  while($row=mysqli_fetch_array($result))
                    {
						$selected="";
						if($utid==$row['ut_id'])
						{
							$selected="selected";
						}
           ?>
                       <option <?php echo $selected; ?> value="<?php echo $row['ut_id']?>">
						<?php echo $row['ut_name'];?>
						</option>
<?php
}
?></select></div>
 <div class="form-group">
   <label for="name">Phone number:</label> 
   <input type="tel" name="txt_tel" value="<?php echo $uph;?>">
 </div>
  <div class="form-group">
<label> Achievements</label>
<input type="text" name="txt_uach" value="<?php echo $uach;?>">
</div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_uname" value="<?php echo $uname;?>">
</div>
 <div class="form-group">
<label> Password</label>
<input type="text" name="txt_pwd" value="<?php echo $upass; ?>">
</div>
<button type="submit" class="btn btn-primary" name="btn_update" style="float: right">update</button>
</form>
</div>
</td>
</table>
</div>
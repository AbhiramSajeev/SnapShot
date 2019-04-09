<html>
<title>change password</title>
<body>
<?php
session_start();
include("../config.php");
include("header1.php");
?>
<h3 align="center" style="font-style:italic">Change Password</h3>
<br>
<form action="" method="post">
 <div class="form-group" align="center">
   <label for="name">current Password</label>  
   <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  name="txt_cpass" required>
   </div>
   <br>
  <div class="form-group" align="center">
   <label for="name">New Password</label>  
   <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  name="txt_npass" required>
   </div>
   
   <button type="submit" class="btn btn-primary" name="btn_save" style="float: right;margin-right:350px ">Save</button>
   <button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
   </form>
<?php
include("footer.php");
?>
</body>
</html>


<?php
$cid=$_SESSION["u_id"];
if(isset($_POST["btn_save"]))
{
	
	 $cpwd=$_POST["txt_cpass"];
	 $npwd=$_POST["txt_npass"];
	 $result=mysqli_query($con,"select cpass from tbl_customer where c_id=$cid");
	 $row=mysqli_fetch_array($result);
	 echo $pwd=$row["cpass"]; 
	 if($pwd==$cpwd)
	 {
		 mysqli_query($con,"update tbl_customer set cpass='$npwd' where c_id=$cid");
		 //header("location:index.php");
		 echo "<script>alert('Password Changed');window.location='index.php'</script>";
		 
	 }else
	 {
		 echo "<script>alert('Password Error');window.location='changepwd.php'</script>";
	 }
}
?>
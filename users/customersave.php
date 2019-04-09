
<?php
include("../config.php");
if(isset($_POST["btn_cusave"]))
{
	$name=$_POST["txt_name"];
	$gender=$_POST["gender"];
	$utid=$_POST["utype"];
	$dob=$_POST["txt_date"];
	$add=$_POST["txt_address"];
	$email=$_POST["txt_uemail"];
	$ph=$_POST["txt_tel"];
	$cname=$_POST["txt_cname"];
	$pwd=$_POST["txt_cpwd"];
	$result=mysqli_query($con,"select * from tbl_customer where c_name='$name'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		echo "<script>alert('Name Allready Exisit');window.location='customer.php'</script>";
	}
	else
	{
	mysqli_query($con,"insert into tbl_customer(ut_id,c_name,c_gender,c_dob,c_add,c_ph,c_email,cname,cpass,status) values($utid,'$name','$gender','$dob','$add','$ph','$email','$cname','$pwd',0)");   
	header("location:signin.php");   
	}
}
	?>

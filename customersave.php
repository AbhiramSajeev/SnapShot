<?php
	include("config.php");
	if(isset($_POST["btn_cusave"]))
	{
		$name=mysqli_real_escape_string($con,$_POST["txt_name"]);
		$gender=mysqli_real_escape_string($con,$_POST["gender"]);
		$dob=mysqli_real_escape_string($con,$_POST["txt_date"]);
		$add=$_POST["txt_address"];
		$email=$_POST["txt_uemail"];
		$ph=$_POST["txt_tel"];
		$cname=$_POST["txt_cname"];
		$pwd=$_POST["txt_cpwd"];
		mysqli_query($con,"insert into tbl_customer(c_name,c_gender,c_dob,c_add,c_ph,c_email,cname,cpass) values('$name','$gender','$dob','$add','$ph','$email','$cname','$pwd')");   
		header("location:customer.php");   
	}
?>
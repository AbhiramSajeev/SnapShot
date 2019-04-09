<?php

include("../config.php");
if(isset($_POST["btn_update"]))
{
	$uid=$_POST["txt_uid"];
	$name=$_POST["txt_name"];
	$gender=$_POST["gender"];
	$date=$_POST["txt_date"];
	$add=$_POST["txt_address"];
	$email=$_POST["txt_uemail"];
	$utype=$_POST["utype"];
	$ph=$_POST["txt_tel"];
	$uach=$_POST["txt_uach"];
	$uname=$_POST["txt_uname"];
	$upass=$_POST["txt_pwd"];
	 
	mysqli_query($con,"update tbl_user set u_name='$name',u_gender='$gender',u_dob='$date',u_add='$add',u_ph='$ph',u_email='$email',ut_id='$utype',u_ach='$uach',uname='$uname',upass='$upass' where u_id=$uid");   
	header("location:user.php");     
	}
?>

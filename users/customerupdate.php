<?php

include("../config.php");
if(isset($_POST["btn_cupdate"]))
{
	$cid=$_POST["txt_cid"];
	$name=$_POST["txt_name"];
	$cgender=$_POST["gender"];
	$utype=$_POST["utype"];
	$cdate=$_POST["txt_date"];
	$cadd=$_POST["txt_address"];
	$cemail=$_POST["txt_uemail"];
	$cph=$_POST["txt_tel"];
	$cname=$_POST["txt_cname"];
	$cpass=$_POST["txt_cpwd"];
	  mysqli_query($con,"update tbl_customer set c_name='$name',c_gender='$cgender',ut_id='$utype',c_dob='$cdate',c_add='$cadd',c_email='$cemail',c_ph='$cph',cname='$cname',cpass='$cpass' where c_id=$cid");   
	header("location:customer.php");     
	}
?>

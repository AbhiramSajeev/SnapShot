<?php

include("../config.php");
if(isset($_POST["btn_caupdate"]))
{
	$ca_id=$_POST["txt_caid"];
	$cname=$_POST["txt_caname"];
	$cades=$_POST["txt_cades"];
	mysqli_query($con,"update tbl_category set ca_name='$cname',ca_des='$cades' where ca_id=$ca_id");   
	header("location:category.php");     
	}
?>

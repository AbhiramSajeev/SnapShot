<?php

include("../config.php");
if(isset($_POST["btn_ptupdate"]))
{
	$ptid=$_POST["txt_ptid"];
	$ptname=$_POST["txt_pname"];
	$ptdes=$_POST["txt_ptdes"];  
	mysqli_query($con,"update tbl_producttype set pt_name='$ptname',pt_des='$ptdes' where pt_id=$ptid");   
	header("location:prodtype.php");     
	}
?>

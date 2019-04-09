<?php

include("../config.php");
if(isset($_POST["btn_utupdate"]))
{
	$utid=$_POST["txt_utid"];
	$utname=$_POST["txt_utname"];
	mysqli_query($con,"update tbl_usertype set ut_name='$utname' where ut_id=$utid");   
	header("location:usertype.php");     
	}
?>

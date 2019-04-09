<?php
include("../config.php");
if(isset($_GET["abid"]))
{
    $id=$_GET["abid"];
	$status=$_POST["status"];
	  mysqli_query($con,"update tbl_painting set status=1 where p_id=$id");   
	header("location:paintingconform.php");     
	}
?>

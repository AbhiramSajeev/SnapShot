<?php
include("../config.php");
if(isset($_GET["rid"]))
{
    $id=$_GET["rid"];
	$status=$_POST["status"];
	  mysqli_query($con,"update tbl_painting set status=2 where p_id=$id");   
	header("location:paintingconform.php");     
	}
?>

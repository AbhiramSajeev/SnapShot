<?php
include("../config.php");
if(isset($_GET["abid"]))
{
    echo $id=$_GET["abid"];
	$status=$_POST["status"];
	  mysqli_query($con,"update tbl_photograph set status=1 where ph_id=$id");   
	header("location:photoconform.php");     
	}
?>

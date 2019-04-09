<?php
include("../config.php");
if(isset($_GET["rid"]))
{
    $id=$_GET["rid"];
	$status=$_POST["status"];
	  mysqli_query($con,"update tbl_photograph set status=2 where ph_id=$id");   
	header("location:photoconform.php");     
	}
?>

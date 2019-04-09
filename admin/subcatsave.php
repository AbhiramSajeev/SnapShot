<?php
include("../config.php");
if(isset($_POST["btn_subsave"]))
{
	$category=$_POST["category"];
	$subcat=$_POST["txt_subcat"];
	mysqli_query($con,"insert into tbl_subcategory(ca_id,sca_name) values('$category','$subcat')"); 
  header("location:subcategory.php");    
	}
?>

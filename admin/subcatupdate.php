<?php
include("../config.php");
if(isset($_POST["btn_subupdate"]))
{
	$subcat_id=$_POST["txt_scaid"];
	$cat_id=$_POST["category"];
	$scid=$_POST["txt_scaname"];
	mysqli_query($con,"update tbl_subcategory set ca_id='$cat_id',sca_name='$scid' where sca_id=$subcat_id");   
	header("location:subcategory.php");     
	}
?>
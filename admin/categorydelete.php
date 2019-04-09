<?php
include("../config.php");
if(isset($_GET["bid"]))
{
echo $id= $_GET["bid"];
}
mysqli_query($con,"delete from tbl_category where ca_id=$id");
header("location:category.php");
	?>
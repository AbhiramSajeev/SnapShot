<?php
include("config.php");
if(isset($_GET["bid"]))
{
echo $id= $_GET["bid"];
}
mysqli_query($con,"delete from tbl_product where p_id=$id");
header("location:product.php");
	?>
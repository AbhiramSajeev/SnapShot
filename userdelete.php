<?php
include("config.php");
if(isset($_GET["bid"]))
{
echo $id= $_GET["bid"];
}
mysqli_query($con,"delete from tbl_user where u_id=$id");
header("location:user.php");
	?>
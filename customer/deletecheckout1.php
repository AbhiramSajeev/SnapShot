<?php
include("../config.php");
if(isset($_GET["bid"]))
{
echo $id= $_GET["bid"];
}
mysqli_query($con,"delete from tbl_booking2 where b_id=$id");
header("location:checkout1.php");
	?>
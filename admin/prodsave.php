<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
if(isset($_POST["btn_psave"]))
{
	$prodname=$_POST["txt_pname"];
	$proddes=$_POST["txt_pdes"];
	mysqli_query($con,"insert into tbl_producttype(pt_name,pt_des) values('$prodname','$proddes')");   
	header("location:prodtype.php");   
	}
	?>
</body>
</html>
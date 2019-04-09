<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
if(isset($_POST["btn_utsave"]))
{
	$usertype=$_POST["txt_utname"];
	mysqli_query($con,"insert into tbl_usertype(ut_name) values('$usertype')");   
	header("location:usertype.php");   
	}
	?>
</body>
</html>
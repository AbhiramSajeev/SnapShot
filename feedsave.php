<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("config.php");
if(isset($_POST["btn_send"]))
{
	$date=$_POST["txt_date"];
	$cmmt=$_POST["txt_comment"];
	echo "insert into tbl_feedback(comment,f_date,status)values('$cmmt','$date',0)";
	mysqli_query($con,"insert into tbl_feedback(comment,f_date,status)values('$cmmt','$date',0)");
	//header("location:feedback.php");   
	}
	?>
</body>
</html>
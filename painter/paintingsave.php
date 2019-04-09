<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
if(isset($_POST["btn_pasave"]))
{
	$catid=$_POST["category"];
	$scatid=$_POST["subcategory"];
	$name=$_POST["txt_pname"];
	$painting=$_FILES["painting"]["name"];
	$date=$_POST["txt_date"];
	$amunt=$_POST["txt_amunt"];
	$des=$_POST["txt_des"];
	echo move_uploaded_file($_FILES["painting"]["tmp_name"],"upload/".$_FILES["painting"]["name"]);
   /* echo "insert into tbl_painting(ca_id,sca_id,pa_name,painting,p_date,amount,p_des,status) values($catid,$scatid,'$name','$painting','$date',$amunt,'$des',0)";*/
	echo mysqli_query($con,"insert into tbl_painting(ca_id,sca_id,pa_name,painting,p_date,amount,p_des,status) values($catid,$scatid,'$name','$painting','$date',$amunt,'$des',0)");
	header("location:painting.php");   
	}
	?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("config.php");
if(isset($_POST["btn_prodsave"]))
{
	$ptype=$_POST["ptype"];
	$catid=$_POST["category"];
	$scatid=$_POST["subcategory"];
	$pname=$_FILES["txt_pname"]["name"];
	$date=$_POST["txt_date"];
	$des=$_POST["txt_des"];
	echo move_uploaded_file($_FILES["txt_pname"]["tmp_name"],"upload/".$_FILES["txt_pname"]["name"]);

	echo mysqli_query($con,"insert into tbl_product(pt_id,ca_id,sca_id,p_name,p_date,p_des,status) values('$ptype','$catid','$scatid','$pname','$date','$des',0)");
	header("location:product.php");   
	}
	?>
</body>
</html>
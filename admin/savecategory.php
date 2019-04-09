<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
if(isset($_POST["btn_casave"]))
{
	$category=$_POST["txt_caname"];
	$cades=$_POST["txt_cades"];
	echo($category);
	echo("<br>");
	echo($cades);  
	mysqli_query($con,"insert into tbl_category (ca_name,ca_des) values('$category','$cades')");   
	header("location:category.php");   
	}

?>
<?php 
if(isset($_POST["btn_caclear"]))
 ?>
  <textarea class="form-control" name="txt_cades" placeholder=""></textarea>
  <input type="text" class="form-control" name="txt_caname" placeholder="">
</body>
</html>
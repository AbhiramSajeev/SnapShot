<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
if(isset($_POST["btn_usersave"]))
{
	$name=$_POST["txt_uname"];
	$ugender=$_POST["gender"];
	$udob=$_POST["txt_date"];
	$uadd=$_POST["txt_address"];
	$uemail=$_POST["txt_uemail"];
	$utid=$_POST["utype"];
	$uph=$_POST["txt_tel"];
	$uach=$_POST["txt_uach"];
	$uname=$_POST["txt_uname"];
	$upwd=$_POST["txt_pwd"];
	//echo "insert into tbl_user(u_name,u_gender,u_dob,u_add,u_ph,u_email,ut_id,u_ach,uname,upass) values('$name','$ugender','$udob','$uadd','$uemail',$utid,'$uph','$uname','$upwd')";
	mysqli_query($con,"insert into tbl_user(u_name,u_gender,u_dob,u_add,u_ph,u_email,ut_id,u_ach,uname,upass) values('$name','$ugender','$udob','$uadd','$uph','$uemail',$utid,'$uach','$uname','$upwd')");   
	header("location:signin.php");   
	}
	?>
</body>
</html>
<?php
session_start();
include("../config.php");
if(isset($_POST["log_in"]))
{
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	$result=mysqli_query($con,"select * from tbl_manager where uname='$uname'and password='$pass'");
	$row_count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	$result1=mysqli_query($con,"select * from tbl_customer where cname='$uname'and cpass='$pass'");
	$row1=mysqli_fetch_array($result1);
	$row1_count=mysqli_num_rows($result1);
	if($row_count>0)
	{
	$_SESSION["u_id"]=$row['uid'];
	 header("location:../admin/index.php"); 
	}
	else if($row1_count>0)
	{
		$_SESSION["u_id"]=$row1['c_id'];
		$_SESSION["u_type"]=$row1["ut_id"];
		header("location:../customer/index.php"); 
	}
	else
	{
		$_SESSION['error']='Invalid username or password';
		header("location:signin.php");
		
	}
		
}
?>

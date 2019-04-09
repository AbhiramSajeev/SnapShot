
<?php
session_start();
$cid=$_SESSION["u_id"];
include("../config.php");
if(isset($_POST["btn_pasave"]))
{
	$c_id=$cid;
	$catid=$_POST["category"];
	$scatid=$_POST["subcategory"];
	$name=$_POST["txt_pname"];
	$painting=$_FILES["painting"]["name"];
	$date=$_POST["txt_date"];
	$amunt=$_POST["txt_amunt"];
	 $qty=$_POST["qty"];
	$des=$_POST["txt_des"];
	echo move_uploaded_file($_FILES["painting"]["tmp_name"],"paintingupload/".$_FILES["painting"]["name"]);
	
	$result=mysqli_query($con,"select * from tbl_painting where pa_name='$name'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		echo "The product is already exist";
	}
	else
	{
  	 mysqli_query($con,"insert into tbl_painting(ca_id,c_id,sca_id,pa_name,painting,p_date,amount,p_des,status,count) values($catid,$c_id,$scatid,'$name','$painting','$date',$amunt,'$des',0,$qty)");
	header("location:painting.php");
	}
	}
	?>

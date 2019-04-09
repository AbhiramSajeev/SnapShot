
<?php
session_start();
$cid=$_SESSION["u_id"];
include("../config.php");
if(isset($_POST["btn_phsave"]))
{
	 $c_id=$cid;
	 $catid=$_POST["category"];
	 $scatid=$_POST["subcategory"];
	 $name=$_POST["txt_phname"];
	 $photo=$_FILES["txt_photo"]["name"];
	 $date=$_POST["txt_date"];
	 $amunt=$_POST["txt_amunt"];
	 $qty=$_POST["qty"];
	 $des=$_POST["txt_des"];
 move_uploaded_file($_FILES["txt_photo"]["tmp_name"],"photoupload/".$_FILES["txt_photo"]["name"]);
 $result=mysqli_query($con,"select * from tbl_photograph where ph_name='$name'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		echo "The product in already exist";
	}
	else
	{
	 mysqli_query($con,"insert into tbl_photograph(ca_id,c_id,sca_id,ph_name,photo,p_date,amount,p_desc,status,count) values($catid,$c_id,$scatid,'$name','$photo','$date','$amunt','$des',0,$qty)");
	header("location:photograph.php");   
	}
}
	?>

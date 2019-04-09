
<?php
include("../config.php");
if(isset($_POST["btn_phsave"]))
{
	echo $catid=$_POST["category"];
	echo $scatid=$_POST["subcategory"];
	echo $name=$_POST["txt_phname"];
	echo $photo=$_FILES["txt_photo"]["name"];
	echo $date=$_POST["txt_date"];
	echo $amunt=$_POST["txt_amunt"];
	echo $des=$_POST["txt_des"];
 move_uploaded_file($_FILES["txt_photo"]["tmp_name"],"upload/".$_FILES["txt_photo"]["name"]);
	 mysqli_query($con,"insert into tbl_photograph(ca_id,sca_id,ph_name,photo,p_date,amount,p_desc,status) values($catid,$scatid,'$name','$photo','$date','$amunt','$des',0)");
	header("location:photograph.php");   
	}
	?>

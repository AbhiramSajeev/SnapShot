<?php
if(isset($_POST["btn_send"]))
{
	echo $cid=$_POST["customer"];
	echo $comment=$_POST["comment"];
	echo $date=$_POST["txt_date"];
    
	mysqli_query($con,"insert into tbl_feedback (c_id,f_date,comment) values('$cid','$date','$comment')");
}
	?>
<?php

include("header.php");
?>

<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="usertypesave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ADD USERTYPE</h3>
  <div class="form-group">
    <label for="name">User Type:</label>
    <input type="text" class="form-control" name="txt_utname" required>
    </div>
     <?php
include("../config.php");
$result=mysqli_query($con,"select * from tbl_usertype");
echo "<table border='3'>";
echo "<tr>";
echo "<th>usertype name</th>";
echo "<th>Delete</th>";
echo "<th>Edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ut_name']."</td>";
	echo"<td><a href='utypedelete.php?bid=".$row['ut_id']."'>Delete</a></td>";
	echo"<td><a href='utedit.php?bid=".$row['ut_id']."'><i class='fa fa-edit'style='color:green'>&nbsp;EDIT</i></a></td>";
	echo"</tr>";
}
?>

  
 <button type="submit" class="btn btn-primary" name="btn_utsave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
 
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<?php
include("footer.php");
?>
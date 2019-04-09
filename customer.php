<?php 
include("config.php");
?>
<html>
<body>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="customersave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
 <div class="form-group">
  <label for="name">Full Name :</label>
   <input type="text" class="form-control" name="txt_name" required>
   </div>
    <div class="form-group">
    <label for="name">Gender:</label>
    <label><input type="radio" name="gender" value="male" id="Radio_0">Male</label>
     <label><input type="radio" name="gender" value="female" id="Radio_1">Female</label>
     <br>
</div>
 <div class="form-group">
<label>Date Of Birth:</label>
  <input type="date" name="txt_date">
</div>
 <div class="form-group">
    <label>Address :</label>
 <textarea class="form-control" name="txt_address" ></textarea>
  </div>
   <div class="form-group">      
      <label for="name">Email:</label>
     <input type="email" name="txt_uemail">
   </div>
    <div class="form-group">
  <label for="name">Phone number:</label>   
  <input type="tel" name="txt_tel">
  </div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_cname">
</div>
 <div class="form-group">
<label> Password</label>
<input type="text" name="txt_cpwd">
</div>
 <button type="submit" class="btn btn-primary" name="btn_cusave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
 <?php
include("config.php");
$result=mysqli_query($con,"select * from tbl_customer");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>delete</th>";
echo "<th>edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['c_name']."</td>";
	echo"<td>".$row['c_gender']."</td>";
	echo"<td>".$row['c_dob']."</td>";
	echo"<td>".$row['c_add']."</td>";
	echo"<td>".$row['c_email']."</td>";
	echo"<td>".$row['c_ph']."</td>";
	echo"<td>".$row['cname']."</td>";
	echo"<td>".$row['cpass']."</td>";
	echo"<td><a href='customerdelete.php?bid=".$row['c_id']."'>delete</a></td>";
	echo"<td><a href='customeredit.php?bid=".$row['c_id']."'>edit</a></td>";
	echo"</tr>";
}
?>
</div>
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
</body>
</html>
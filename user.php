
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

<form action="usersave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
   <div class="form-group">
   <label for="name">Full Name :</label>
    <input type="text" class="form-control" name="txt_uname" required>
  </div>
    <div class="form-group">
   <label for="name">Gender:</label>
    <label>
       <input type="radio" name="gender" value="male" id="Radio_0" checked>
       Male</label>
     <label>
       <input type="radio" name="gender" value="female" id="Radio_1">
       Female</label>
     <br>
    </div>

 <div class="form-group">
 <label for="name">Date Of Birth:</label>
   <input type="date" name="txt_date">
 </div>
  <div class="form-group">
    <label for="pwd">Address :</label>
 <textarea  class="form-control" name="txt_address" ></textarea>
  </div>
    <div class="form-group">
    <label for="name">Email:</label>
       <input type="email" name="txt_uemail">
     </div>
 <div class="form-group">
    <label for="name">User Type:</label>
    <select name="utype" required>
    <option value="0">----Select----</option>
          <?php
               $result=mysqli_query($con,"select *from tbl_usertype");
                  while($row=mysqli_fetch_array($result))
                    {
           ?>
                       <option value="<?php echo $row['ut_id']?>">
						<?php echo $row['ut_name'];?>
						</option>
<?php
}
?></select></div>
 <div class="form-group">
   <label for="name">Phone number:</label> 
   <input type="tel" name="txt_tel">
 </div>
  <div class="form-group">
<label> Achievements</label>
<input type="text" name="txt_uach">
</div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_uname">
</div>
 <div class="form-group">
<label> Password</label>
<input type="text" name="txt_pwd">
</div>
 <button type="submit" class="btn btn-primary" name="btn_usersave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
 <?php
include("config.php");
$result=mysqli_query($con,"select * from tbl_user u, tbl_usertype ut where u.ut_id = ut.ut_id");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Type</th>";
echo "<th>Phone No.</th>";
echo "<th>Achievement</th>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>delete</th>";
echo "<th>edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['u_name']."</td>";
	echo"<td>".$row['u_gender']."</td>";
	echo"<td>".$row['u_dob']."</td>";
	echo"<td>".$row['u_add']."</td>";
	echo"<td>".$row['u_email']."</td>";
	echo"<td>".$row['ut_name']."</td>";
	echo"<td>".$row['u_ph']."</td>";
	echo"<td>".$row['u_ach']."</td>";
	echo"<td>".$row['uname']."</td>";
	echo"<td>".$row['upass']."</td>";
	echo"<td><a href='userdelete.php?bid=".$row['u_id']."'>delete</a></td>";
	echo"<td><a href='useredit.php?bid=".$row['u_id']."'>edit</a></td>";
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
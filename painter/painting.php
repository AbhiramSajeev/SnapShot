<?php 
include("../config.php");
include("header.php");
?>
<html>
<body>
<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="paintingsave.php" method="post" enctype="multipart/form-data">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>        
 <div class="form-group">
  <label for="name">Category Name :</label>
    <select name="category" required>
    <option value="0">----Select----</option>
          <?php
               $result=mysqli_query($con,"select * from tbl_category");
                  while($row=mysqli_fetch_array($result))
                    {
           ?>
                       <option value="<?php echo $row['ca_id']?>">
						<?php echo $row['ca_name'];?>
						</option>
<?php
}
?></select></div>        
 <div class="form-group">
  <label for="name">Subcategory Name :</label>
    <select name="subcategory" required>
    <option value="0">----Select----</option>
          <?php
               $result=mysqli_query($con,"select * from tbl_subcategory");
                  while($row=mysqli_fetch_array($result))
                    {
           ?>
                       <option value="<?php echo $row['sca_id']?>">
						<?php echo $row['sca_name'];?>
						</option>
                      
<?php
}
?>  </select></div> 
   <div class="form-group">
   <label for="name">Name:</label>  
   <input type="text" name="txt_pname" required>
   </div>
         
     
   <div class="form-group">
   <label for="name">Painting:</label>  
   <input type="file" name="painting" required>
   </div>
    <div class="form-group">
     <label> Date</label>
      <input type="date" name="txt_date">
</div>
    <div class="form-group">
     <label> Amount</label>
      <input type="text" name="txt_amunt">
</div>

 <div class="form-group">
<label> Description</label>
<textarea type="text" name="txt_des"></textarea>
</div>
 <button type="submit" class="btn btn-primary" name="btn_pasave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
<div class="form-group">
 <?php
include("../config.php");
$result=mysqli_query($con,"select * from tbl_painting p,tbl_category c,tbl_subcategory s where p.ca_id=c.ca_id and p.sca_id=s.sca_id and status= 1");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Category Name</th>";
echo "<th>Subcategory</th>";
echo "<th>Product Name</th>";
echo "<th>Product</th>";
echo "<th>Date</th>";
echo "<th>Amount</th>";
echo "<th>Description</th>";
echo "<th>delete</th>";
echo "<th>edit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ca_name']."</td>";
	echo"<td>".$row['sca_name']."</td>";
	echo"<td>".$row['pa_name']."</td>";
	echo"<td><img src='upload/".$row['painting']."' style='height:100px;width:100px'/></td>";
	echo"<td>".$row['p_date']."</td>";
	echo"<td>".$row['amount']."</td>";
	echo"<td>".$row['p_des']."</td>";
	echo"<td><a href='paintingdelete.php?bid=".$row['p_id']."'>Delete</a></td>";
	echo"<td><a href='paintingedit.php?bid=".$row['p_id']."'>Edit</a></td>";
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
<?php include("footer.php"); ?>
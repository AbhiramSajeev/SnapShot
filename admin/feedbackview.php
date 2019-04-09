
<?php
include("header.php");
include("../config.php");
?>
<div class="form-group">
 <?php
$result=mysqli_query($con,"select * from tbl_feedback");
echo "<table border='3'>";
echo "<tr>";
echo "<th>Comment</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['comment']."</td>";
	echo"</tr>";
}
?></div> 
<tr>    
  <div class="form-group">
    <label for="pwd">Replay:</label>
    <textarea class="form-control" name="txt_replay" id="txt_compdesc"></textarea>
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_send" style="float: right">Send</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
</div>
</tr>

<?php
include("footer.php");
?>
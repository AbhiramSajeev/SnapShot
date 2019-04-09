<?php
include("config.php");
?>

<div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
<form action="feedsave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">FeedBack</h3> 
 <div class="form-group">
    <label for="pwd">Date:</label>
    <input type="date" name="txt_date">
  </div>     
  <div class="form-group">
    <label for="pwd">Comment:</label>
    <textarea class="form-control" name="txt_comment" id="txt_compdesc"></textarea>
  </div>
  
 <button type="submit" class="btn btn-primary" name="btn_send" style="float: right">Send</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<?php
?>
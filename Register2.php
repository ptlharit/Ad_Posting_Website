<?php require('Mydb.php'); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	
$(".country").change(function()
{
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_state.php",
data: dataString,
cache: false,
success: function(html)
{
$(".state").html(html);
} 
});

});

$('.state').live("change",function(){									   
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});



});
</script>
<form name="form1" method="post" action="ApprovePending.php">
  <table width="100%" border="0">
    <tr>
      <td width="50%" align="right">
      </td>
      <td width="50%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="right"><div align="center">
        <h2>Registration Form</h2>
      </div></td>
    </tr>
    <tr>
      <td width="50%" align="right">&nbsp;</td>
      <td width="50%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td width="50%" align="right">Name :</td>
      <td width="50%" align="left"><input type="text" name="txtName" id="txtName"></td>
    </tr>
   <tr>
      <td width="50%" align="right">Email ID :</td>
      <td width="50%" align="left"><input type="text" name="txtEmailID" id="txtEmailID"></td>
    </tr>
   
    <tr>
      <td width="50%" align="right">Password :</td>
      <td width="50%" align="left"><input type="password" name="txtPassword" id="txtPassword"></td>
    </tr>
    
     
     <tr>
       <td align="right">Country :</td>
       <td align="left">
       
       <select name="country" class="country">
    <option selected="selected">Please Select</option>
    <?php
$sql=mysql_query("select * from tbl_country");
while($row=mysql_fetch_array($sql))
{
echo '<option>'.$row['countryname'].'</option>';
 } ?>
  </select>
       
       </td>
     </tr>
     <tr>
       <td align="right">State :</td>
       <td align="left">
       
       <select name="state" class="state">
    <option selected="selected">Please Select</option>
  </select>
       
       
       </td>
     </tr>
    <tr>
      <td width="50%" align="right">City :</td>
      <td width="50%" align="left">
      
     
     
     <select name="city" class="city">
    <option selected="selected">Please Select</option>
  </select>
     
      
      
      &nbsp;</td>
    </tr>
    <tr>
      <td width="50%" align="right">Mobile No :</td>
      <td width="50%" align="left"><input type="text" name="txtMobileNo" id="txtMobileNo" /></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td width="50%" align="right">&nbsp;</td>
      <td width="50%" align="left"><input type="submit" name="Submit" id="Submit" value="Submit"></td>
    </tr>
  </table>
</form>

<?php
session_start();
if(!isset($_SESSION['ClientUserName']) || $_SESSION['ClientUserName']!=true)
{
	header("Location:Login.php");
	exit();
}
else
{
	$adminuser=$_SESSION['ClientUserName'];	
}

?>
 <div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>   
<?php

require("ClientTop.php");


?>
           
                   
                   
<?php



?>
<form id="form1" name="form1" method="post" action="ChangeSuccess.php">
<table width="100%" border="0">
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="right"><div align="center">Change Password</div></td>
    </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="right">Old Password :</td>
    <td width="50%"><input type="text" name="txtOldPassword" id="txtOldPassword" />    </td>
  </tr>
  <tr>
    <td width="50%" align="right">New Password :</td>
    <td width="50%"><input type="text" name="txtNewPassword" id="txtNewPassword" /></td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" /></td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
  </form>
  <div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php

require("ClientBottom.php");


?>

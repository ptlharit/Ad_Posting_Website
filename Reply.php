<?php
session_start();
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>
<?php
 $id=$_GET['val'];
 $_SESSION['mynewsid'] = $id;
 //echo $id;
 ?>
<form id="form1" name="form1" method="post" action="ReplyCode.php">

<table width="100%" border="0">

  <tr>
    <td colspan="2" align="right"><div align="center" style="font-weight: bold; color: #000000; font-size: 18px">Reply to Advertisement</div></td>
    </tr>
  <tr>
    <td width="40%" align="right">&nbsp;</td>
    <td width="60%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%" align="right">Name :</td>
    <td width="60%" align="left"><input type="text" name="txtName" id="txtName" /></td>
  </tr>
  <tr>
    <td width="40%" align="right">Email ID :</td>
    <td width="60%" align="left"><input type="text" name="txtEmailID" id="txtEmailID" /></td>
  </tr>
  <tr>
    <td width="40%" align="right">Mobile No :</td>
    <td width="60%" align="left"><input type="text" name="txtMobileNo" id="txtMobileNo" /></td>
  </tr>
  <tr>
    <td width="40%" align="right">Message :</td>
    <td width="60%" align="left"><textarea name="txtMessage" cols="35" rows="7" id="txtMessage"></textarea></td>
  </tr>
  <tr>
    <td width="40%" align="right">&nbsp;</td>
    <td width="60%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%" align="right">&nbsp;</td>
    <td width="60%" align="left"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" /></td>
  </tr>
  <tr>
    <td width="40%" align="right">&nbsp;</td>
    <td width="60%" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
 <?php
require("Bottom.php");
?>
 
<?php
session_start();
if(!isset($_SESSION['AdminUserName']) || $_SESSION['AdminUserName']!=true)
{
	header("Location:index.php");
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body>
<form action="EditAdminCode.php" method="post">

<?php
	
	 
	 $id=$_GET['ID'];
	 $_SESSION['mynewsid'] = $id;
	  require_once("../Mydb.php");	
	
           $query11 = 'select * from tbl_admin where AdminID='.$id;
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		$ausername=$row11['UserName'];
		//$levelname=$row11['LevelName'];
		$apassword=$row11['Password'];
	}
	
	mysql_close($conn);
	 	
	
         
	?>
<br />
<h3 align="center">Edit Admin</h3>
<br />
<table width="100%" border="0">
  <tr>
    <td width="50%" align="right">User Name :</td>
    <td width="50%" align="left"><label>
      <input type="text" name="txtUserName" id="txtUserName" value="<?php echo $ausername; ?>"/>
      </label></td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%" align="left"></td>
  </tr>
   <tr>
    <td width="50%" align="right">Password :</td>
    <td width="50%" align="left"><label>
      <input type="text" name="txtPassword" id="txtPassword" value="<?php echo $apassword; ?>"/>
      </label></td>
  </tr>
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%" align="left"><label>
      <input type="submit" name="btnSave" id="btnSave" value="Update" />
      </label></td>
  </tr>
</table>
</form>
</body>
</html>

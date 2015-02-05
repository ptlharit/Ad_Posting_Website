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
<div align="center">
<?php
require_once("Mydb.php");
$oldpassword=$_POST['txtOldPassword'];
$newpassword=$_POST['txtNewPassword'];

$query = "select * from tbl_register where emailid='$adminuser'";
		//echo $query;
		$result = mysql_query($query);

	if($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$opass = $row['password'];
		//echo $opass;
		if($opass==$oldpassword)
		{
			$q="update tbl_register set password='$newpassword' where emailid='$adminuser'";
			$r=mysql_query($q);
			if($r)
			{
				echo "Password Changed Successfully";
			}
		}
		else
		{
			echo "Wrong Old Password";
		}
	
	}

?>
</div>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php

require("ClientBottom.php");


?>
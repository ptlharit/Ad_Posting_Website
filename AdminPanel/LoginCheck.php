<?php
session_start();
$UserName = $_POST['txtUserName'];
$Password = $_POST['txtPassword'];
$errormsg = '';

require_once("../Mydb.php");

$query = "select * from tbl_admin where UserName='$UserName' and Password='$Password'";
$result = mysql_query($query);

if($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
	if($UserName==$row['UserName'] && $Password==$row['Password'])
	{
		if(isset($UserName) && isset($Password))
		{
			$_SESSION['AdminUserName'] = $UserName;
			header("Location:AdminHome.php");
			exit();
		}
	}
}
else
{
	$errormsg = 'Sorry, You have to Entered Wrong UserName OR Password...';
	echo "<b>".$errormsg;
}

?>
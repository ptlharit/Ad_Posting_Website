<?php
session_start();
if(!isset($_SESSION['mynewsid']) || $_SESSION['mynewsid']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
	$id=$_SESSION['mynewsid'];	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<br />
<?php
 require_once("../Mydb.php");
$ausername=$_POST['txtUserName'];
$apassword=$_POST['cmbTables'];
//$apwd=$_POST['txtPassword'];	
		$query1 = "update tbl_subcategory set subcategoryname='$ausername', categoryname='$apassword' where subcategoryid='$id'";
		$result1 = mysql_query($query1);
		if($result1)
			{
			header("Location:SubCategory.php");
			}
?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
$host = 'localhost';	
	$userName = 'root';
	$password = '';
	$db = 'carportal';
	
	$conn = mysql_connect($host,$userName,$password) or die ("Connection Failed...");
	mysql_select_db($db);

$ID=$_POST['editor1'];
	//$username=$_POST['txtUserName'];	
		//$query1 = "insert into tbl (name) values ('$ID')";
		$query1 = "update tbl set name='$ID' where id='6'";
		$result1 = mysql_query($query1);	
		
		
			if($result1)
			{
				echo "<div align='center' style='color:red'>";
				echo "Record Saved";
				echo "</div>";
			}

?>
</body>
</html>

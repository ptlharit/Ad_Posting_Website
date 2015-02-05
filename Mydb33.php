<?php
$host = '208.91.199.11:3306';	
	$userName = 'nitesh11';
	$password = 'doctor12@';
	$db = 'adposting';
	
	$conn = mysql_connect($host,$userName,$password) or die ("Connection Failed...");
	mysql_select_db($db);

?>
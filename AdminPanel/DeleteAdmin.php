<?php
$teacherid=$_GET['ID'];
require_once("../Mydb.php");
$query = "delete from tbl_admin where AdminID=".$teacherid;		
		$result = mysql_query($query);	
		header("Location:AdminUsers.php");
?>
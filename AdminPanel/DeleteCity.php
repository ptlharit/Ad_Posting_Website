<?php
$teacherid=$_GET['ID'];
require_once("../Mydb.php");
$query = "delete from tbl_city where id=".$teacherid;		
		$result = mysql_query($query);	
		header("Location:City.php");
?>
<?php
$teacherid=$_GET['ID'];
require_once("../Mydb.php");
$query = "delete from tbl_category where categoryid=".$teacherid;		
		$result = mysql_query($query);	
		header("Location:Category.php");
?>
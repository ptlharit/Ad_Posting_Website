<?php
$teacherid=$_GET['ID'];
require_once("../Mydb.php");
$query = "delete from tbl_subcategory where subcategoryid=".$teacherid;		
		$result = mysql_query($query);	
		header("Location:SubCategory.php");
?>
  <?php
  require_once("Mydb.php");
           $query11 = 'select * from tbl_terms';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		echo $row11['name'];
	}
	
	
	mysql_close($conn);
	?>
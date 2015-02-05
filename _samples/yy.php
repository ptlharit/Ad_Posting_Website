  <?php
  $host = 'localhost';	
	$userName = 'root';
	$password = '';
	$db = 'carportal';
	
	$conn = mysql_connect($host,$userName,$password) or die ("Connection Failed...");
	mysql_select_db($db);
           $query11 = 'select * from tbl';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		echo $row11['name'];
	}
	
	
	mysql_close($conn);
	?>
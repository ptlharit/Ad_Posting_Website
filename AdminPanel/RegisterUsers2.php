
<div align="center">
<h2>
                    Register Users</h2>
 <?php
 require_once("../Mydb.php");
       $query11 = 'select * from tbl_register';
	$result11 = mysql_query($query11);
	echo '<table border="1">';
	echo '<tr><td>Register ID</td>';
	echo '<td>Name</td>';
	echo '<td>Password</td>';
	echo '<td>Email ID</td>';
	echo '<td>Country</td>';
	echo '<td>State</td>';
	echo '<td>City</td>';
	echo '<td>Mobileno</td>';
	echo '<td>Verify</td></tr>';
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
	echo '<tr><td>'.$row11["registerid"].'</td>';
	echo '<td>'.$row11["name"].'</td>';
	echo '<td>'.$row11["password"].'</td>';
	echo '<td>'.$row11["emailid"].'</td>';
	echo '<td>'.$row11["country"].'</td>';
	echo '<td>'.$row11["state"].'</td>';
	echo '<td>'.$row11["city"].'</td>';
	echo '<td>'.$row11["mobileno"].'</td>';
	echo '<td>'.$row11["verify"].'</td></tr>';
	
	}
	echo '</table>';
	
	
      
      ?>
	  </div>
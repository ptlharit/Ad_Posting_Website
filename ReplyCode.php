<?php
session_start();
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php

$postadid=$_SESSION['mynewsid'];
$name=$_POST['txtName'];
$emailid=$_POST['txtEmailID'];
$mobileno=$_POST['txtMobileNo'];
$message=$_POST['txtMessage'];


require_once("Mydb.php");
$query1 = "insert into tbl_replyad (name,emailid,phoneno,message,postadid) values ('$name','$emailid','$mobileno','$message','$postadid')";
		$result1 = mysql_query($query1);	
		
		
			if($result1)
			{
				echo "<div align='center' style='color:red'>";
				echo "Reply Successfully Sent.";
				echo "</div>";
			}



?>



<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>

 <?php
require("Bottom.php");
?>
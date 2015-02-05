<?php
session_start();
if(!isset($_SESSION['AdminUserName']) || $_SESSION['AdminUserName']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
	$adminuser=$_SESSION['AdminUserName'];	
}

?>

<?php

require("Top.php");


?>
<h2>
                   Record Successfully Saved !!!</h2>
                <div class="block">
                   
<?php
 require_once("../Mydb.php");




$ID=$_POST['editor1'];
	//$username=$_POST['txtUserName'];	
		//$query1 = "insert into tbl (name) values ('$ID')";
		$query1 = "update tbl_contactus set name='$ID' where id='1'";
		$result1 = mysql_query($query1);	
		
		
			if($result1)
			{
				echo "<div align='center' style='color:red'>";
				echo "Record Saved";
				echo "</div>";
			}

?>
<?php

require("Bottom.php");


?>


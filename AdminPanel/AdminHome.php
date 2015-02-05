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
                    Admin Home</h2>
                <div class="block">
                   
                   
<?php


echo '<div align="center">';

echo "<br><br>";

echo "Welcome, ";
echo $adminuser;

echo "<br><br>";echo "<br><br>";

echo "</div>";

?>
<?php

require("Bottom.php");


?>

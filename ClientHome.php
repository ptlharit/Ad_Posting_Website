<?php
session_start();
if(!isset($_SESSION['ClientUserName']) || $_SESSION['ClientUserName']!=true)
{
	header("Location:Login.php");
	exit();
}
else
{
	$adminuser=$_SESSION['ClientUserName'];	
}

?>

<?php

require("ClientTop.php");


?>
           
    <div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>               
                   
<?php


echo '<div align="center">';

echo "<br><br>";

echo "Welcome, ";
echo $adminuser;

echo "<br><br>";echo "<br><br>";

echo "</div>";

?>


<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php

require("ClientBottom.php");


?>

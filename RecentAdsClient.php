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

require("RecentAds2.php");

?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php

require("ClientBottom.php");


?>

<?php
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>
<br /><br /><br />
<?php
$hello=$_GET['foh'];

$kb=strlen($hello);

$hb=substr($hello,15,$kb);

require("Mydb.php");
$query="update tbl_register set verify='Yes' where registerid=$hb";
$result=mysql_query($query);
//echo $query;

echo '<div style="font-size:14pt;color:red;" align="center">';
echo 'EmailID Verified Successfully<br><br>';
echo '<a href="Login.php">Login Here</a>';

echo '</div>';
?>
<br /><br /><br />
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php
require("Bottom.php");
?>
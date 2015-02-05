<?php
require("Top.php");
?>
 <div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>

</div>   
<br /><br /><br />
<?php
require("Mydb.php");
$name=$_POST['txtName'];
//$username=$_POST['txtUserName'];
$password=$_POST['txtPassword'];
$emailid=$_POST['txtEmailID'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$mobno=$_POST['txtMobileNo'];


$query12="select * from tbl_register where emailid='$emailid'";
$result12=mysql_query($query12);
if($row12=mysql_fetch_array($result12))
{
echo '<div style="font-size:14pt;color:red;" align="center">';

echo "EmailID already registered.<br><br>";

echo '<a href="Login.php">Login Here</a>';

echo '</div>';
}
else
{



$query="insert into tbl_register(name,password,emailid,country,state,city,mobileno,verify) values ('$name','$password','$emailid','$country','$state','$city','$mobno','No')";

//echo $query;
$result=mysql_query($query);

$query1="select max(registerid) as myid from tbl_register";
$result1=mysql_query($query1);
if($row=mysql_fetch_array($result1))
{
	$maxid=$row['myid'];
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$body = "<html><head><title>Jobs</title></head><body>Welcome<br><br>Welcome to Job Posting services.<br>
Your password is: '$password'<br>
Thank You
</body></html>";
$headers .= "From: Ad Posting Services <freeads@onlinework4home.in>\r\n";
$subject = 'EmailID Varification';
$email = $emailid;;
mail($email,$subject,$body,$headers);

echo '<div style="font-size:14pt;color:red;" align="center">';

echo "Registration Pending. Check your inbox to varify your emailid";

echo '</div>';

}

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
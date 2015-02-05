<?php
session_start();
if(!isset($_SESSION['ClientUserName']) || $_SESSION['ClientUserName']!=true)
{
	header("Location:Login.php");
	exit();
}
else
{
	$clientuser=$_SESSION['ClientUserName'];	
	require("Mydb.php");
	$query1 = "select * from tbl_register where emailid='$clientuser'";
			
			//echo $query1;
			$result1 = mysql_query($query1);
			
			if($row1 = mysql_fetch_array($result1))
			{
				$regid=$row1['registerid'];
			}
			
}

?>

<?php
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>


<br /><br /><br />
<?php
	require("Mydb.php");
	$fname=basename($_FILES['f1']['name']);
	$ext=substr($fname,strrpos($fname,'.')+1);	
	$newname=dirname(__FILE__).'AdImages/'.$fname;
		
	move_uploaded_file($_FILES['f1']["tmp_name"],"AdImages/".$fname);
			
	$emailid=$_POST['txtEmailID'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$address=$_POST['txtAddress'];
	$category=$_POST['cmbCategory'];	
	$subcategory=$_POST['cmbSubCategory'];
	$adtitle=$_POST['txtAdTitle'];
	$description=$_POST['editor1'];
	$related=$_POST['txtRelatedKeywords'];
	$mobileno=$_POST['txtMobileNo'];
	 
	$cdate=date("d-m-Y");
	//$regid=1;
	$displayid=1000000;
	$membertype="Free";

	$query="insert into tbl_postad(emailid,country,state,city,address,category,subcategory,adtitle,description,adimage, relatedkeyword, mobileno, registerid,displayid, membertype,addate) values ('$emailid','$country', '$state', '$city','$address','$category','$subcategory','$adtitle','$description','$fname','$related','$mobileno','$regid','$displayid','$membertype','$cdate')";
	
	//echo $query;
	$result=mysql_query($query);
	if($result)
	{
	echo '<div style="font-size:14pt;color:red" align="center">';
		echo 'Your Ad Successfully Posted.<br><br>';
		echo '<a href="PostFreeAd.php">Post Another Ad</a>';
		echo '</div>';
		
	}
			
		

?>
<br /><br /><br />
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>
<?php
require("Bottom.php");
?>
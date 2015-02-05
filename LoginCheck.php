<?php
session_start();
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>
<?php


if(isset($_POST['btnLogin']))
{

		$UserName = $_POST['txtUserName'];
		$Password = $_POST['txtPassword'];
		$errormsg = '';
		
		require_once("Mydb.php");
		
		$query = "select * from tbl_register where emailid='$UserName' and password='$Password'";
		//echo $query;
		$result = mysql_query($query);

	if($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		if($UserName==$row['emailid'] && $Password==$row['password'])
		{
			if(isset($UserName) && isset($Password))
			{
				if($row['verify']=="Yes")
				{
					$_SESSION['ClientUserName'] = $UserName;
					
					echo'<SCRIPT Language="javascript">location.href="ClientHome.php"</SCRIPT>';
					
					//header("Location:ClientHome.php");
					exit();
				}
				else
				{
					echo '<div style="font-size:14pt;color:red;" align="center">';
		
						echo "Your emailid is not verified! Please verify your email.";
						
						echo '</div>';
				}
			}
		}
	}
	else
	{
			echo '<div style="font-size:14pt;color:red;" align="center">';
		
			$errormsg = 'Sorry, You have to Entered Wrong EmailID OR Password...';
			echo "<b>".$errormsg;
			echo '</div>';
	}
}





if(isset($_POST['btnForgetPassword']))
{
			require_once("Mydb.php");
			$email=$_POST['txtForgetPassword'];
			$query1 = "select * from tbl_register where emailid='$email' and Verify='Yes'";
			
			//echo $query1;
			$result1 = mysql_query($query1);
			
			if($row1 = mysql_fetch_array($result1))
			{
			$pwd11=$row1['password'];
			$to = $email;
			$subject = "Password Recovery";
			$message = "Your Password is : " .$pwd11;
			$from = "freeads@onlinework4home.in";
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
			//echo "Mail Sent.";
			
			echo '<div style="font-size:14pt;color:red" align="center">';
						echo "Password Successfully sent to your emailid. Please Check your Inbox.";
						echo '</div>';
			}
			else
			{
		echo '<div style="font-size:14pt;color:red" align="center">';
					echo "EmailID is not registered or not approved.";
					echo '</div>';
			}

}
	


?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>
<?php
require("Bottom.php");
?>
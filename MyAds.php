<?php
session_start();
if(!isset($_SESSION['ClientUserName']) || $_SESSION['ClientUserName']!=true)
{
	header("Location:Login.php");
	exit();
}
else
{
require_once("Mydb.php");
	$adminuser=$_SESSION['ClientUserName'];	
	$query1 = "select * from tbl_register where emailid='$adminuser'";
		//echo $query;
		$result1 = mysql_query($query1);

	if($row1 = mysql_fetch_array($result1,MYSQL_ASSOC))
	{
		$registerid=$row1['registerid'];
		}
}

?>

<?php

require("ClientTop.php");


?>
   <div align="center">
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
<script type="text/javascript" src="http://adhitzads.com/592370"></script>
</div>        
                   
                   
<?php


$query ="select * from tbl_postad where registerid='$registerid'";
$result = mysql_query($query);
echo '<table width="100%" border="0">';
while($row=mysql_fetch_array($result))
{
		$postadid=$row['postadid'];
		$imgname=$row['adimage'];

		if($imgname=="")
		{
		$myimg="images/FreeAds.jpg";
		}
		else
		{
			$myimg="AdImages/".$imgname;
		}

		$adtitle=$row['adtitle'];
		$addate=$row['addate'];
		$addescription=$row['description'];
		
		 echo '<tr><td width="25%" rowspan="2" valign="middle"><img src="'.$myimg.'" width="100px" height="100px"></td>';
			echo '<td width="65%"><div align="justify">'.$adtitle.'</div></td>';
		   echo ' <td width="10%"><div align="center">'.$addate.'</div></td>  </tr>';
		 echo '<tr>';
		 
 
 	if(strlen($addescription) > 100)
	{
		echo '<td width="65%"><div align="justify">'.substr($addescription,0,100).'<br><a href="ReadMore.php?val='.$postadid.'">Read More</a></div>		</td>';
	}
	else
	{
//no point of having read more button here cuz there nothing more to read :)
	echo '<td width="65%"><div align="justify">'.$addescription.'</div></td>';
 
 	}
  
  echo '<td width="10%"><div align="center"><a href="Reply.php?val='.$postadid.'">Reply</a></div></td>  </tr>';
  echo '<tr><td colspan="3"><hr></td></tr>';
  
 } 
 
 
 
 
 
 
 echo '</table>';
  
  

?>
<?php

require("ClientBottom.php");


?>

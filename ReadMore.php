<?php
require("Top.php");
?>
<div align="center">
<script type="text/javascript" src="http://adhitzads.com/592369"></script>
</div>
<?php
 $postid=$_GET['val'];
 $_SESSION['mynewsid'] = $postid;
 
  require_once("Mydb.php");	
	
           
		   
		   $query ="select * from tbl_postad where postadid='$postid'";
$result = mysql_query($query);

if($result)
{
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
		//echo $myimg;
		$adtitle=$row['adtitle'];
		$addate=$row['addate'];
		$addescription=$row['description'];
		
		 echo '<tr><td width="25%" rowspan="2" valign="middle"><img src="'.$myimg.'" width="100px" height="100px"></td>';
			echo '<td width="65%"><div align="justify">'.$adtitle.'</div></td>';
		   echo ' <td width="10%"><div align="center">'.$addate.'</div></td>  </tr>';
		
		
		 echo '<tr>';
		 
		 
			
					echo '<td width="65%"><div align="justify">'.$addescription.'</div></td>';
				 
				
		  
				  echo '<td width="10%"><div align="center"><a href="Reply.php?val='.$postadid.'">Reply</a> </div></td>  </tr>';
				  echo '<tr><td colspan="3"><hr></td></tr>';
		  
		 } 
		 
		 
		 
		 echo '</table>';
		  
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




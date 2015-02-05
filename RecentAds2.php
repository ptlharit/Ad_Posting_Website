<h1>Recent Ads</h1>
<?php
 require_once("Mydb.php");
 
 
 $offset = 0;
 $noofrecords=10;
$query ="select * from tbl_postad order by displayid limit $offset,$noofrecords";
$result = mysql_query($query);
echo '<table width="100%" border="0">';
while($row=mysql_fetch_array($result))
{
$postadid=$row['postadid'];
$imgname=$row['adimage'];
$adtitle=$row['adtitle'];
$addate=$row['addate'];
$addescription=$row['description'];

 echo '<tr><td width="25%" rowspan="2" valign="middle"><img src="AdImages/'.$imgname.'" width="100px" height="100px"></td>';
    echo '<td width="65%"><div align="justify">'.$adtitle.'</div></td>';
   echo ' <td width="10%"><div align="center">'.$addate.'</div></td>  </tr>';
 echo '<tr>';
 
 
 if(strlen($addescription) > 100)
{
echo '<td width="65%"><div align="justify">'.substr($addescription,0,100).'<br><a href="ReadMore.php?val='.$postadid.'">Read More</a></div></td>';
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
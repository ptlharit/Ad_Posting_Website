<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	
$(".country").change(function()
{
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_state.php",
data: dataString,
cache: false,
success: function(html)
{
$(".state").html(html);
} 
});

});

$('.state').live("change",function(){									   
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});



});
</script>
<form name="form1" method="post" action="">


<h1>Search your term here.</h1>

<table width="100%">

<tr>
       <td align="right">Country :</td>
       <td align="left">
       
       <select name="country" class="country">
    <option selected="selected">Please Select</option>
    <?php
	require_once("Mydb.php");
$sql=mysql_query("select * from tbl_country");
while($row=mysql_fetch_array($sql))
{
echo '<option>'.$row['countryname'].'</option>';
 } ?>
  </select>       </td>
     
       <td align="right">State :</td>
       <td align="left">
       
       <select name="state" class="state">
    <option selected="selected">Please Select</option>
  </select>       </td>
    
      <td align="right">City :</td>
      <td align="left">
      
     
     
     <select name="city" class="city">
    <option selected="selected">Please Select</option>
  </select>
     
      
      
      &nbsp;</td>
  </tr>
<tr>
  <td colspan="4" align="right">
    <div align="left">Search Term :
      <input name="txtSearch" type="text" id="txtSearch" size="50">
    </div></td>
  <td align="right"><div align="left">
    <input type="submit" name="btnSearch" id="btnSearch" value="Search">
  </div></td>
  <td align="left">
 
  
  </td>
</tr>
</table>


 <?php
  if(isset($_POST['btnSearch']))	
	{
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $terms=$_POST['txtSearch'];
 
// require_once("Mydb.php");
 $query5 ="select * from tbl_postad where country='$country' and state='$state' and city='$city' and adtitle like '%$terms%' order by displayid";
 //echo $query5;
$result5 = mysql_query($query5);
echo '<table width="100%" border="0">';
while($row5=mysql_fetch_array($result5))
{
$postadid=$row5['postadid']; 
$imgname=$row5['adimage'];

if($imgname=="")
		{
		$myimg="images/FreeAds.jpg";
		}
		else
		{
			$myimg="AdImages/".$imgname;
		}
//echo $myimg;
$adtitle=$row5['adtitle'];
$addate=$row5['addate'];
$addescription=$row5['description'];

 echo '<tr><td width="25%" rowspan="2" valign="middle"><img src="'.$myimg.'" width="100px" height="100px"></td>';
    echo '<td width="65%" valign="top"><div align="justify">'.$adtitle.'</div></td>';
   echo ' <td width="10%" valign="top"><div align="center">'.$addate.'</div></td>  </tr>';
 echo '<tr>';
 
 
 if(strlen($addescription) > 100)
{
echo '<td width="65%" valign="top"><div align="justify">'.substr($addescription,0,100).'<br><a href="ReadMore.php?val='.$postadid.'">Read More</a></div></td>';
}
else
{
//no point of having read more button here cuz there nothing more to read :)
echo '<td width="65%" valign="top"><div align="justify">'.$addescription.'</div></td>';
 
 }
  
  echo '<td width="10%" valign="top"><div align="center"><a href="Reply.php?val='.$postadid.'">Reply</a></div></td>  </tr>';
  echo '<tr><td colspan="3"><hr></td></tr>';
  
 } 
 
 
 
 
 
 
 echo '</table>';
  
 
 
 
 
 
 
  }
  else
  {
  
  
$query1 ="select * from tbl_postad order by displayid";
$result1 = mysql_query($query1);
echo '<table width="100%" border="0">';
while($row1=mysql_fetch_array($result1))
{
$postadid=$row1['postadid'];
$imgname=$row1['adimage'];

if($imgname=="")
		{
		$myimg="images/FreeAds.jpg";
		}
		else
		{
			$myimg="AdImages/".$imgname;
		}

$adtitle=$row1['adtitle'];
$addate=$row1['addate'];
$addescription=$row1['description'];

 echo '<tr><td width="25%" rowspan="2" valign="middle"><img src="'.$myimg.'" width="100px" height="100px"></td>';
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
  
  }
  ?>





</form>
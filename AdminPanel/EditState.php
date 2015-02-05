<?php
session_start();
if(!isset($_SESSION['AdminUserName']) || $_SESSION['AdminUserName']!=true)
{
	header("Location:index.php");
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body>
<form action="EditStateCode.php" method="post">

<?php
	
	 
	 $id=$_GET['ID'];
	 $_SESSION['mynewsid'] = $id;
	  require_once("../Mydb.php");	
	
           $query11 = 'select * from tbl_state where id='.$id;
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		$ausername=$row11['statename'];
		$ausername2=$row11['countryname'];		
	}
	
	//mysql_close($conn);
	 	
	
         
	?>
<br />
<h3 align="center">Edit State</h3>
<br />
<table width="100%" border="0">
  <tr>
    <td width="50%" align="right">State Name :</td>
    <td width="50%" align="left"><label>
      <input type="text" name="txtUserName" id="txtUserName" value="<?php echo $ausername; ?>"/>
      </label></td>
  </tr>
  
   <tr>
    <td width="50%" align="right">Country Name :</td>
    <td width="50%" align="left"><label>
      
      <?php
	 // require_once("../Mydb.php");
      $qq = 'select * from tbl_country';	
	$result33 =mysql_query($qq);
	echo '<select name="cmbCountry" id="cmbCountry">';
	echo '<option>Please Select</option>';
	while($row1=mysql_fetch_array($result33))
	{
	if($ausername2==$row1['countryname'])
	{
	echo '<option value ='.$row1["countryname"].' selected>'.$row1["countryname"].'</option>';	
	}
	else
	{
	echo '<option>'.$row1["countryname"].'</option>';	
	}
	}
	echo '</select>';
      ?>
      
      
      
      </label></td>
  </tr>
  
  
 
  <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td width="50%" align="left"><label>
      <input type="submit" name="btnSave" id="btnSave" value="Update" />
      </label></td>
  </tr>
</table>
</form>
</body>
</html>

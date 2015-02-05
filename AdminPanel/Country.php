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
<form id="form1" name="form1" method="post" action="Country.php">
  <table width="100%" border="0">
    
    <tr>
      <td colspan="2" align="right"><div align="center">
        <h2>Country</h2>
      </div></td>
    </tr>
    
    </tr>
    <tr>
      <td width="50%" align="right">Add Country :</td>
      <td width="50%" align="left"><input type="text" name="txtCategory" id="txtCategory" /></td>
    </tr>
    <tr>
      <td width="50%" align="right">&nbsp;</td>
      <td width="50%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td width="50%" align="right">&nbsp;</td>
      <td width="50%" align="left"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" /></td>
    </tr>
  
    <tr>
      <td colspan="2" align="right">
      
      
      
      
      <?php 
	  require_once("../Mydb.php");
      if(isset($_POST['btnSubmit']))	
	{
	
	$name=$_POST['txtCategory'];
	//$pass=$_POST['txtPassword'];
		$query11 = "insert into tbl_country (countryname) values ('$name')";		
		$result11 = mysql_query($query11);		
		
			if($result11)
			{
				echo "<div align='center' style='color:red'>";
				echo "Record Saved";
				echo "</div>";
			}
	}
	
	?>
      
      </td>
    </tr>
    
    <tr>
      <td colspan="2" align="right"><div align="center">
        <h2>Mangae Country</h2>
      </div></td>
    </tr>
   
    <tr>
      <td colspan="2" align="right"><div align="center">
      <table width="30%" border="1">
  <tr>
    <td align="center" width="10%">&nbsp;</td>
    <td width="20%">Country Name</td>
    </tr>
      <?php
       $query11 = 'select * from tbl_country';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
	$kk=$row11["id"];
		echo "<tr><td align='center'><a href='DeleteCountry.php?ID=$kk'>Delete</a> &nbsp;&nbsp; <a href='EditCountry.php?ID=$kk'>Edit</a></td>";
    
	 echo '<td>'.$row11["countryname"].'</td></tr>';
	
	}
	
	
	
      
      ?>
      </table>
      </div>
       
      
      
      </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

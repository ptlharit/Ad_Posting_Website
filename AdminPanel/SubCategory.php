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
<form id="form1" name="form1" method="post" action="SubCategory.php">
  <table width="100%" border="0">
    
    <tr>
      <td colspan="2" align="right"><div align="center">
        <h2>Sub Category</h2>
      </div></td>
    </tr>
    
    </tr>
    <tr>
      <td width="50%" align="right">Sub Category :</td>
      <td width="50%" align="left"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="50%" align="right"></td>
      <td width="50%" align="left"></td>
    </tr>
     <tr>
      <td width="50%" align="right">Category :</td>
      <td width="50%" align="left">
      <?php
	  require_once("../Mydb.php");
      $qq = 'select * from tbl_category';	
	$result33 =mysql_query($qq);
	echo '<select name="cmbTables" id="cmbTables">';
	while($row1=mysql_fetch_array($result33))
	{
	
	echo '<option>'.$row1[1].'</option>';	
	}
	echo '</select>';
      ?>
      </td>
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
	  
      if(isset($_POST['btnSubmit']))	
	{
	
	$username=$_POST['txtUserName'];
	$password=$_POST['cmbTables'];
	//echo $password;
	//$pass=$_POST['txtPassword'];
		$query11 = "insert into tbl_subcategory (subcategoryname,categoryname) values ('$username','$password')";		
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
        <h2>Mangae SubCategory</h2>
      </div></td>
    </tr>
   
    <tr>
      <td colspan="2" align="right"><div align="center">
      <table width="50%" border="1">
  <tr>
    <td align="center" width="10%">&nbsp;</td>
    <td width="20%">Sub Category</td>
    <td width="20%">Category Name</td>
    </tr>
      <?php
       $query11 = 'select * from tbl_subcategory';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
	$kk=$row11["subcategoryid"];
		echo "<tr><td align='center'><a href='DeleteSubCategory.php?ID=$kk'>Delete</a> &nbsp;&nbsp; <a href='EditSubCategory.php?ID=$kk'>Edit</a></td>";
    
	 echo '<td>'.$row11["subcategoryname"].'</td>';
	 echo '<td>'.$row11["categoryname"].'</td></tr>';
	
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

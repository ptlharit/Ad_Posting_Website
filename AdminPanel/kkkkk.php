<?php
session_start();
if(!isset($_SESSION['AdminUserName']) || $_SESSION['AdminUserName']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
	$adminuser=$_SESSION['AdminUserName'];	
}

?>

<script type="text/javascript" src="../ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />
<style>
#container
{
width: 60 %;
clear: both;
border: 1px solid #CCC;
}
#col_left
{
float: left;
width: 20%;
margin: 0 5px 0 0;
border: 1px solid #CCC;
}
#col_mid
{
float: left;
width: 20%
margin: 0 5px 0 0;
border: 1px solid #CCC;
}
#col_right
{
float: right;
width; 20%;
margin: 5px;
border: 1px solid #CCC;
} 
</style>
<?php

require("Top.php");


?>
<h2>
                    Admin Users</h2>
                <div class="block">

<div style="text-align:center">
      <form id="form1" name="form1" method="post" action="AdminUsers.php">
        <table width="100%" border="0">
         
          <tr>
            <td colspan="2" align="center">
            <?php

		 require_once("../Mydb.php");

	
	
	if(isset($_POST['btnSave']))	
	{
	//$levelname=$_POST['cmbLevel'];
	$username=$_POST['txtUserName'];
	$password=$_POST['txtPassword'];
	
		$query1 = "insert into tbl_admin (UserName,Password) values ('$username','$password')";
		
		$result1 = mysql_query($query1);	
		
		
			if($result1)
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
            <td width="50%" align="right">User Name :</td>
            <td width="50%" align="left"><label>
              <input type="text" name="txtUserName" id="txtUserName" />
            </label></td>
          </tr>
          
           <tr>
            <td colspan="2" align="center" height="10px">
            </td>
            </tr>
          
            <tr>
            <td width="50%" align="right">Password :</td>
            <td width="50%" align="left"><label>
              <input type="text" name="txtPassword" id="txtPassword" />
            </label></td>
          </tr>
          
           <tr>
            <td colspan="2" align="center" height="10px">
            </td>
            </tr>
         
          <tr>
            <td width="50%" align="right">&nbsp;</td>
            <td width="50%" align="left"><label>
              <input type="submit" name="btnSave" id="btnSave" value="Save" />
             
            </label></td>
          </tr>
           <tr>
            <td colspan="2" align="center" height="10px">
            </td>
            </tr>
          <tr>
            <td colspan="2" align="center">
            <div style="background-color:#99CCFF;width:50%;border-style:dotted;border-width:medium">
            <table border="1" width="50%">
  <tr>
   
    <td width="50%" align="center">User Name</td>
     <td width="50%" align="center">Password</td>
    
    
  </tr>
            <?php
        
		 require_once("../Mydb.php");	
	
           $query11 = 'select * from tbl_admin';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
	
    
	 echo '<tr><td align="center" width="50%">'.$row11["UserName"].'</td>';
	  echo '<td align="center" width="50%">'.$row11["Password"].'</td></tr>';
	}
	
	
	echo '</table>';
		
		   
	?>
    </div>
            </td>
          </tr>
          <tr>
            <td width="50%" align="right">&nbsp;</td>
            <td width="50%" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td width="50%" align="right">&nbsp;</td>
            <td width="50%" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td width="50%" align="right">&nbsp;</td>
            <td width="50%" align="left">&nbsp;</td>
          </tr>
        </table>
        </form>
      </div>
<div id="container">
<div id="col_left">&nbsp; something here</div>
<div id="col_mid">&nbsp; something here </div>
<div id="col_right">&nbsp; something here</div>

<div style="clear: both"></div>
</div> 
<?php

require("Bottom.php");


?>
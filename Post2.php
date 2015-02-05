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
<script language="javascript">
function change(val)
{
	this.location="PostFreeAd.php?ID="+val;
}
</script>
<script type="text/javascript" src="ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />
<form method="post" enctype="multipart/form-data" name="form1" action="PostSuccess.php">
  <table width="100%" border="0">
    <tr>
      <td width="40%" align="right">&nbsp;</td>
      <td width="60%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="right"><div align="center">
        <h2>Post Free Ad</h2>
      </div></td>
    </tr>
    <tr>
      <td width="40%" align="right">&nbsp;</td>
      <td width="60%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td width="40%" align="right">Category :</td>
      <td width="60%" align="left">
      <?php
	  require_once("Mydb.php");
	  if(isset($_GET['ID']))
   {
		$mm = $_GET['ID'];
		}
		else
		{
		$mm="";
		}
      $qq1 = 'select * from tbl_category';	
	$result331 =mysql_query($qq1);
	echo '<select name="cmbCategory" id="cmbCategory" onChange="change(this.value)">';
	echo '<option>Please Select</option>';	
	while($row11=mysql_fetch_array($result331))
	{
		if($mm==$row11['categoryname'])
		{
			echo '<option selected>'.$row11['categoryname'].'</option>';	
		}
		else
		{
			echo '<option>'.$row11['categoryname'].'</option>';	
		}
	}
	echo '</select>';
      ?>
      
      
      
      &nbsp;</td>
    </tr>
     <tr>
      <td width="40%" align="right">Sub Category :</td>
      <td width="60%" align="left">
      
      <?php
 if(isset($_GET['ID']))
   {
		$mm = $_GET['ID'];
		//echo $mm;
		$query33="select * from tbl_subcategory where categoryname='$mm'";
		//echo $query33;
		$result33=mysql_query($query33);
		echo '<select name="cmbSubCategory" id="cmbSubCategory">';
		echo '<option>Please Select</option>';
		while($row33=mysql_fetch_array($result33))
		{
			$gg=$row33['subcategoryname'];
			echo '<option>'.$row33['subcategoryname'].'</option>';	
	
		}
		echo '</select>';
	}
	else
	{
		echo '<select name="cmbSubCategory" id="cmbSubCategory">';
		echo '<option>Please Select</option>';
		echo '</select>';
		$gg="";

	}
?>
     
      
      
      
      
      &nbsp;</td>
    </tr>
  
    <tr>
      <td width="40%" align="right">Email ID :</td>
      <td width="60%" align="left"><input name="txtEmailID" type="text" id="txtEmailID" size="40"></td>
    </tr>
    
    <tr>
       <td align="right">Country :</td>
       <td align="left">
       
       <select name="country" class="country">
    <option selected="selected">Please Select</option>
    <?php
$sql=mysql_query("select * from tbl_country");
while($row=mysql_fetch_array($sql))
{
echo '<option>'.$row['countryname'].'</option>';
 } ?>
  </select>       </td>
     </tr>
     <tr>
       <td align="right">State :</td>
       <td align="left">
       
       <select name="state" class="state">
    <option selected="selected">Please Select</option>
  </select>       </td>
     </tr>
    <tr>
      <td width="40%" align="right">City :</td>
      <td width="60%" align="left">
      
     
     
     <select name="city" class="city">
    <option selected="selected">Please Select</option>
  </select>
     
      
      
      &nbsp;</td>
    </tr>
       <tr>
         <td align="right">Address :</td>
         <td align="left"><input name="txtAddress" type="text" id="txtAddress" size="40" /></td>
       </tr>
       <tr>
      <td width="40%" align="right">Ad Title :</td>
      <td width="60%" align="left"><input name="txtAdTitle" type="text" id="txtAdTitle" size="50"></td>
    </tr>
     <tr>
      <td width="40%" align="right">Description :</td>
      <td width="60%" align="left">
      <textarea cols="80" id="editor1" name="editor1" rows="10">
            
            </textarea>
			<script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'editor1',
					{
						fullPage : true,
						height:"291",
						width:"400",
						extraPlugins : 'docprops',
						toolbar: [	
				
		
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
	{ name: 'styles', items: [ 'Styles', 'Format','Font','FontSize' ] },
	
	{ name: 'colors', items : [ 'TextColor','BGColor' ] }
	
	
	
	
	
	
	]
					});

			//]]>
			</script>      </td>
    </tr>
     <tr>
      <td width="40%" align="right">Add Image :</td>
      <td width="60%" align="left"><input type="file" name="f1" id="f1"></td>
    </tr>
     <tr>
      <td width="40%" align="right">Related KeyWords :</td>
      <td width="60%" align="left"><input name="txtRelatedKeywords" type="text" id="txtRelatedKeywords" size="50"></td>
    </tr>
     <tr>
       <td align="right">&nbsp;</td>
       <td align="left">(Separate With ' , ' )</td>
     </tr>
     <tr>
      <td width="40%" align="right">Mobile No :</td>
      <td width="60%" align="left"><input type="text" name="txtMobileNo" id="txtMobileNo"></td>
    </tr>
     <tr>
      <td width="40%" align="right">&nbsp;</td>
      <td width="60%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td width="40%" align="right">&nbsp;</td>
      <td width="60%" align="left"><input type="submit" name="Submit" id="Submit" value="Submit"></td>
    </tr>
  </table>
</form>

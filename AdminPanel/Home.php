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

<?php

require("Top.php");


?>
<h2>
                    Home Page</h2>
                <div class="block">

 

<form action="HomeCode.php" method="post">

<?php
	 require_once("../Mydb.php");	
	
           $query11 = 'select * from tbl_home where id="1"';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		$hello=$row11['name'];
	}
	
	
	mysql_close($conn);
	?>
    
    
    


<textarea cols="80" id="editor1" name="editor1" rows="10">
            <?php echo $hello; ?>
            </textarea>
			<script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'editor1',
					{
						fullPage : true,
						extraPlugins : 'docprops'
					});

			//]]>
			</script>
		<p>
        <br />
			<input type="submit" value="Submit" />
		</p>
</form>
<?php

require("Bottom.php");


?>


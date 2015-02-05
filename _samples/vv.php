<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Full Page Editing with Document Properties Plugin &mdash; CKEditor Sample</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<script type="text/javascript" src="../ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1 class="samples">
		CKEditor Sample &mdash; Full Page Editing with Document Properties Plugin
	</h1>
	<div class="description">
	<p>
		This sample shows how to configure CKEditor to edit entire HTML pages, from the
		<code>&lt;html&gt;</code> tag to the <code>&lt;/html&gt;</code> tag.
	</p>
	<p>
		The <strong>Document Properties</strong> (<code>docprops</code>) plugin is also turned on.
		This plugin allows you to set the metadata of the page, including the page encoding, margins,
		meta tags, or background.
	</p>
	<p>
		The CKEditor instance below is inserted with a JavaScript call using the following code:
	</p>
	<pre class="samples">CKEDITOR.replace( '<em>textarea_id</em>',
	{
		<strong>fullPage : true,
		extraPlugins : 'docprops'</strong>
	});</pre>
	<p>
		Note that <code><em>textarea_id</em></code> in the code above is the <code>id</code> attribute of
		the <code>&lt;textarea&gt;</code> element to be replaced.
	</p>
	</div>

	<!-- This <div> holds alert messages to be display in the sample page. -->
	<div id="alerts">
		<noscript>
			<p>
				<strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
			</p>
		</noscript>
	</div>
    <?php
	$host = 'localhost';	
	$userName = 'root';
	$password = '';
	$db = 'carportal';
	
	$conn = mysql_connect($host,$userName,$password) or die ("Connection Failed...");
	mysql_select_db($db);
	
	
	
           $query11 = 'select * from tbl where id="6"';
	$result11 = mysql_query($query11);
	
	while($row11=mysql_fetch_array($result11,MYSQL_ASSOC))
	{
		$hello=$row11['name'];
	}
	
	
	mysql_close($conn);
	?>
	<form action="kk.php" method="post">
			<label for="editor1">
				CKEditor using the <code>docprops</code> plugin and working in the Full Page mode:</label>
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
			<input type="submit" value="Submit" />
		</p>
	</form>
	<div id="footer">
		<hr />
		<p>
			CKEditor - The text editor for the Internet - <a class="samples" href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2012, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico
			Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>

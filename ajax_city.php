<?php
require('Mydb.php');

if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysql_query("select * from tbl_city where statename='$id' ");
echo '<option selected="selected">Please Select</option>';
while($row=mysql_fetch_array($sql))
{
echo '<option>'.$row['cityname'].'</option>';
}
}

?>
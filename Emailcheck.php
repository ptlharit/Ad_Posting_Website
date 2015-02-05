<?php
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$body = "<html><head><title>MySite</title></head>
<body>
<a href='http://freeads.onlinework4home.in/Verify.php?foh=vi2og76gb8ngt3a$maxid' target='_blank'>Click Here</a>
</body></html>";
$headers .= "From:Mysite <freeads@onlinework4home.in>\r\n";
$subject = 'Test Email';
$email = "krunalpatel239@gmail.com";
mail($email,$subject,$body,$headers);

?>
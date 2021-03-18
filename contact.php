<?php
$message = $_REQUEST['message'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

if (empty ($message) || empty ($name) || empty ($email))
{
	echo "please fill up all the fields.";
	
}
else 
{
    mail("u.achrekar27@gmail.com","painting project message",$message ,"From: $name <$email>");
	echo "<script type='text/javascript'> 
	alert('your message submitted successfully');
	window.history.log(-1);
	</script>";	
}

?>


<html>
  <head>
    <title>Untitled</title>
  </head>
  <body>
<?PHP
$sender = 'selimrezaswadhim@gmail.com';
$recipient = 'selimrezaswadhin@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
   // echo "Message accepted";
	echo "The email($recipientt) was successfully sent.";
}
else
{
    //echo "Error: Message not accepted";
	echo "The email($sender) was NOT sent.";
}
	  

?>
  </body>
</html>

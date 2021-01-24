<!doctype html>
<html lang="en">
<body>
<?php
if(isset($_REQUEST['email']))
//if email is filled out, send email
{
    //send email
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    mail("selimrezaswadhin@gmail.com", "Subject: $subject", $message, "From : $email");
    echo "Thank you for using our mail form";
}else
//if email is filled out, send email
{
    echo "<form action='mailform.php' method='post'>
Email : <input type='text' name='email'/><br><br>
Subject : <input type='text' name='subject'/><br><br>
Message :<br>
<textarea name='message' id='' cols='30' rows='10'></textarea><br><br>
<input type='submit'/>

</form>";
}
?>
</body>
</html>

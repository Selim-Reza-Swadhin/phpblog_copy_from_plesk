<!doctype html>
<html lang="en">
<body>
<?php
if(isset($_REQUEST['email']))
//if email is filled out, send email
{
    //send email
    $from = $_REQUEST['email'];
    $to = $_REQUEST['toemail'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $headers = "From : $from";
    mail($to, "Subject: $subject", $message, $headers);
    echo "Thank you for using our mail form";
}else
//if email is not filled out, send email
{
    echo "<form action='mailform2.php' method='post'>
To : <input type='text' name='toemail'/><br><br>
From : <input type='text' name='email'/><br><br>
Subject : <input type='text' name='subject'/><br><br>
Message :<br>
<textarea name='message' id='' cols='30' rows='10'></textarea><br><br>
<input type='submit'/>

</form>";
}
?>
</body>
</html>

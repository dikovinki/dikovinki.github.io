<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?
// Your thank you site. 
// consider this being an existing email address 
$to_email = "andrey.zhelkovsky@gmail.com";  
$subject = "message from dikovinki site"; 
$charset='UTF-8';
$subject="=?$charset?B?".base64_encode($subject)."?=$crlf"; 
$message = " name: " . $_POST['name'] . " \r\n  e-mail: " . $_POST['senders email'] . " \r\n web site: " . $_POST['senders website'] . " \r\n  message: " . $_POST['message'];
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/plain; charset=iso-8859-8\r\n"; 
$headers .= "To: <".$to_email.">\r\n"; 
$headers .= "From:andrey zhelkovsky <andrey.zhelkovsky@gmail.com> "; 
mail($to_email, $subject, $message, $headers);

?>

</body>
</html>




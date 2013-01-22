<?php

$email = trim($_POST['email'], "~`:'|\|<>?/,*=+!#$%^&() ");
// Adding stripslashes code on the above line. Important.

// Send email to mailing list
$adminemail = 'mailing-list-email@example.com';
$adminsubject = 'Add Email: ' .$email;
$adminmessage = 'Email: ' .$email;
mail($adminemail, $adminsubject, $adminmessage);



// Send to the email specified
$subject = 'Thank you for Subscribing.';
$headers = 'From: No-Reply <no-reply@example.com>' ."\r\n" .'Reply-To: <reply-to@example.com>' ."\r\n" .'Content-type: text/html; charset=UTF-8\n';
$message = '
<html>
<head></head>
<body>
<h2>Thank you for subscribing.</h2>
<p>Stay up to date with our information and news with your subscription. You wont regret it.</p>
</body>
</html>
';
mail($email, $subject, $message, $headers, '-fno-reply@example.com');

?>


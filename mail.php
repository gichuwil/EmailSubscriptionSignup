<?php

$email = $_POST['email'];

// Send email to mailing list
$adminemail = 'ADD_YOUR_MAILING_LIST_EMAIL_HERE';
$adminsubject = 'Add Email: ' .$email;
$adminmessage = 'Email: ' .$email;
mail($adminemail, $adminsubject, $adminmessage);



// Send to the email specified
$subject = 'Thank you for Subscribing.';
$headers = 'From: No-Reply <ADD_YOUR_'SENT_FROM'_EMAIL_HERE>' ."\r\n" .'Reply-To: DCKS Mail <ADD_YOUR_REPLY_TO_EMAIL_HERE>' ."\r\n" .'Content-type: text/html; charset=UTF-8\n';
$message = '
<html>
<head></head>
<body>
<h2>Thank you for subscribing.</h2>
<p>Stay up to date with our information and news with your subscription. You wont regret it.</p>
</body>
</html>
';
mail($email, $subject, $message, $headers, '-fADD_YOUR_'SENT_FROM'_EMAIL_HERE');

?>


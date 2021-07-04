<?php
    $to      = 'tdn352001@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: coldchery2001@gmail.com'       . "\r\n" .
                 'Reply-To: coldchery2001@gmail.com'       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    $t = mail($to, $subject, $message, $headers);
    if($t)
    echo "S";
    else
    echo "F";
?>
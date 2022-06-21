<?php

    $name = $_POST('name');
    $number = $_POST('number');
    $visitors-email = $_POST('email');
    $message = $_POST('message');


    email-from = 'mohamedmusemohamud12@gmail.com';
    email-subject = "new form submission";
    email-body = "user name: $name.\n".
                 "user number: $number.\n".
                 "user email: $visitors-email\n".

    $to = 'mohamedmusemohamud12@gmail.com';

    $headers = "from: $_email-from \r\n";

    $headers = "Reply-To: $visitor-email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html")


?>
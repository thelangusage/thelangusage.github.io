<?php
    //Newsletter Email
    $email= $_POST['n-email'];

    //Contact form information
    $name= $_POST['name'];

    $form_email= $_POST ['email'];

    $reason= $_POST ['select'];

    $message= $_POST ['message'];

    $email_from = 'langusage.com';

    $email_subject = 'New Form Submission';

    $email_body = 
    "User Name: $name.\n".
    "User Email: $form_email.\n".
    "Newsletter Email: $email.\n".
    "Reason: $reason.\n".
    "Message: $message.\n";

    $to = 'thelangusage@gmail.com';
    
    $headers= "From: $email_from \r\n";

    $headers .= "Reply-To : $form_email \r\n";

    mail($to, $email_subject,$email_body, $headers);

    header("Location:contact.html");
?>
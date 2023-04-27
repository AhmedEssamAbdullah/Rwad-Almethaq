<?php
    //this is your Email address
    //kinldy update your email here
    $to = "rwadelmethaq@gmail.com"; 
    $from = $_POST['email']; 
    //this is the sender's Email address
    //this is firt name
    $first_name = $_POST['name'];
    //this is subject
    $subject = "New contact: " . $_POST['subject'];
    //this is message body
    $message = "Message " . $first_name . " " . " wrote the following: " . "\n" . $_POST['message'];

    $headers = "From:" . $from . "\r\n" .
        'Reply-To: rwadelmethaq@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers2); 
?>
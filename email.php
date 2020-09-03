<?php
$name= $_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['Message'];


$email_from = 'pinkypin189@gmail.com';
$email_subject = "NewFormsubmission";
$email_body = "Name: $name.\n".
              "Email Id:$visitor_email.\n".
              "Message :$Message.\n";


    $to = "veerati.monika@gmail.com";
    $headers="From: $email_from \r\n";
    $headers="Reply-To: $visitor_email \r\n";
    mail(to,$email_subject,$email_body,$headers);
    header("Location: Contactus.html");

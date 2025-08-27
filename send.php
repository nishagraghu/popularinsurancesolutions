<?php
// SHOW ERRORS
ini_set('display_errors', 1);

    $to = 'nishag619@gmail.com';
    $subject = 'Message from Contact Demo ';
    $message = 'Name: ' . $_POST['username'] . "\r\n\r\n";
    $message .='phone: ' . $_POST['phone'] . "\r\n\r\n";
    $message .='Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .='Message: ' . $_POST['message'];
    $headers = "From:
    " . $_POST['email'];
    if(mail($to, $subject, $message, $headers)) {
        $result = '<div class="alert alert-success">Form submitted successfully</div>';
    } else {
        $result = '<div class="alert alert-danger">Form submission failed</div>';
    }




?>
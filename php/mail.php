<?php 
    $to = 'abhi12.p@gmail.com'; // this is your Email address
    $to2 = 'dave07747@gmail.com';
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = 'Form submission';
    $message = $name . 'left the following comment:' . "\n\n" . $_POST['message'];
    $headers = 'From:' . $from;
    $headers2 = 'From:' . $from;
    mail($to,$subject,$message,$headers);
    mail($to2,$subject,$message,$headers2);
    header("Location: http://www.paws4vicky.com");
    die();
?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailmessage = "You have recieved some mail from: ".$name.", email: ".$email.": \n\n".$message;
    
    $to = 'tsthamiltron@email.com';
    $headers = "From: joel.shepherd@hmr.org.nz\r\n";
    $headers .= "Cc: Amanda.O'Connell@tekura.school.nz\r\n";
    
    mail($to,$subject,$mailmessage,$headers);
    header('Location: contact.html');
?>
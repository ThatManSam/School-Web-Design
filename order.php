<?php
    $order = $_GET['order'];
    $price = $_GET['price'];

    $mailmessage = "There is a new order: \n\n ".$order."\n\n Total Price: ".$price;
    
    $to = 'tsthamiltron@email.com';
    $headers = "From: joel.shepherd@hmr.org.nz\r\n";
    $headers .= "Cc: Amanda.O'Connell@tekura.school.nz\r\n";
    
    mail($to,$subject,$mailmessage,$headers);
    header('Location: order.html');
?>
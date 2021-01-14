<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "mersistem@gmail.com";
    $to = "mersistem@gmail.com";
    $subject = "Contacto formulario web";
    $message = $_POST["mensaje"];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>


<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sistemaserviciotecc.000webhostapp.com";
    //$to = "jscervantesmedina@gmail.com";
    $to = $_SESSION['Correo'];
    $subject = "Realizando Pruebas de Email con php";
    $message = "Ella Fornica con otro menos contigo :'v";
    $headers = "De:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>
<?php 
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = 'Formulario Rellenado';
    $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Telefono: $telefono<br> Mensaje:".$_POST['mensaje'];
            
    if(mail('valenzuela.noe.cb37@gmail.com', $asunto, $mensaje)){
    echo "Correo enviado";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $asunto = 'Formulario Rellenado';
            $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Telefono: $telefono<br> Mensaje:".$_POST['mensaje'];
            
            if(mail('valenzuela.noe.cb37@gmail.com', $asunto, $mensaje)){
                echo "Correo enviado";
            }
        ?>
    </body>
</html>

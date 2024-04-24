<?php

function enviarMail(): bool
{
    // capturamos datos enviados por el formulario

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    // Configuramos datos de e-mail a enviar
    $destinatario = 'alofutbolperuano@gmail.com';
    $asunto = 'E-mail enviado desde nuestro sistema';
    $cuerpo = '<div style="width: 450px;
                        padding: 24px;
                        background-color: #222529;
                        border-radius: 16px;
                        color: #fff;
                        box-shadow: 0px 0px 8px rbga(0,0,0,0.25);
                        font-family: Tahoma;
                        font-size: 1.2em;
                        ">';
    $cuerpo .= 'Nombre: ' . $nombre . '<br>';
    $cuerpo .= 'Email: ' . $email . '<br>';
    $cuerpo .= 'Consulta: ' . $consulta . '</div>';

    #Encabezados adicionales
    $headers = 'From: contacto@empresa.com' . "\r\n";
    $headers = 'Reply-To: ' . $email . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    //enviamos el e-mail
    if (mail($destinatario, $asunto, $cuerpo)) {
        return true;
    }
    return false;
}

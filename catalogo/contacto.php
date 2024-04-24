<?php

require 'config/config.php';
require 'funciones/correo.php';
$check = enviarMail();
include '../layouts/header.php';

?>
<main class="container py-3">
    <h1>Contacto</h1>

    <div class="alert p-4 col-8 my-5 mx-auto shadow">

        <?php
        $mensaje = 'No se pudo enviar el e-mail';
        if ($check) {
            $mensaje = "Gracias: " . $_POST['nombre'] . ' por contactarnos';
        }
        echo $mensaje;
        ?>
    </div>


</main>

<?php
include 'layouts/footer.php';

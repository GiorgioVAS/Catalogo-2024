<?php

    session_start();
    $nombre = $_SESSION['nombre'];
    /* modificamos valor de una variable de sesion */
    $_SESSION["numero"] = 333;
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Recuperar datos de sesión</h1>
    Nombre: <?= $nombre ?>
    <br>
    Número: <?= $_SESSION["numero"] ?>
    </main>
<?php
    include '../layouts/footer.php';

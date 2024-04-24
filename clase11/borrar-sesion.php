<?php
    session_start();
    unset($_SESSION['cart']);// eliminar una sola variable
    session_unset();// Eliminar todas las variables de sesion
    session_destroy(); // eliminar la sesion

    include '../layouts/header.php';
?>
<main class="container py-3">
    <h1>Tema de la página</h1>


</main>
<?php
    include '../layouts/footer.php';
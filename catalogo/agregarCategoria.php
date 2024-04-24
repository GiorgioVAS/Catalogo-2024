<?php
require 'config/config.php';
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$check = agregarCategoriaID();

include 'layouts/header.php';
include 'layouts/nav.php';

?>

<main class="container py-4">
    <h1>Alta de una marca</h1>
    <?php
    $mensaje = 'No se pudo agregar la marca';
    $css = 'danger';
    //si check es verdadero
    if ($check) {
        $mensaje = "Marca agregada correctamente";
        $css = "succes";
    }
    ?>
    <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
        <?= $mensaje ?>
        <a href="adminCategorias.php" class="btn btn-dark sep">
            volver al panel
        </a>
    </div>

</main>

<?php include 'layouts/footer.php';  ?>
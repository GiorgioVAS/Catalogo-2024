<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $check = modificarClave();
    include 'layouts/header.php';
    include 'layouts/nav.php';

?>

    <main class="container py-4">
        <h1>Registro de un usuario</h1>
<?php
        $mensaje = 'No se pudo modificar la contraseña';
        $css = 'danger';
        if($check){
            $mensaje = "Contraseña modificada correctamente";
            $css = "succes";
        }
?>
        <div class="alert alert-<?= $css?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>
   
    </main>

<?php  include 'layouts/footer.php';  ?>
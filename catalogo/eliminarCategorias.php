<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $check = eliminarCategoria();
    include 'layouts/header.php';
    include 'layouts/nav.php';

?>

    <main class="container py-4">
        <h1>Baja de una Categoria</h1>
<?php
        $mensaje = 'No se pudo eliminar la categoria';
        $css = 'danger';
        if($check){
            $mensaje = "Marca eliminada correctamente";
            $css = "succes";
        }
?>
        <div class="alert alert-<?= $css?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>
   
    </main>

<?php  include 'layouts/footer.php';  ?>
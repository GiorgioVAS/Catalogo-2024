<?php
    //require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $cantidad = verificarProductoPorCategoria();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de una Categoria</h1>
<?php
    if( $cantidad > 1){
?>

        <div class="alert alert-danger col-6 mx-auto">
            <i class="bi bi-exclamation-triangle fs-3 sep-r"></i>
            No se puede eliminar la categoria ya que tiene productos relacionados
            <br>
            <a href="adminMarcas.php" class="btn btn-outline-secondary mt-3">
                Volver a panel de marcas
            </a>
        </div>
<?php
    }else{
        $categoria = verCategoriaId();
?>
        <div class="alert alert-danger p-4 col-6 mx-auto shadow ">
            Se eliminará la Categoria: <span class="fs-4 sep"><?= $categoria['catNombre'] ?></span>

            <form action="eliminarCategorias.php" method="post">
                <input type="hidden" name="idCategoria"
                       value="<?= $categoria['idCategoria']?>">

                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary sep">
                    Volver a panel de marcas
                </a>
            </form>
        </div>
<?php
    }
?>

    </main>

<?php  include 'layouts/footer.php';  ?>
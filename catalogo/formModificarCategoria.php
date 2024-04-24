<?php
    //require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    
    $categoria = verCategoriaId();

    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de una categoría</h1>

        <div class="alert p-4 col-8 mx-auto shadow">

            <form action="modificarCategoria.php" method="post">
            
            <div class="form-group">
                    <label for="catNombre">Nombre de la Categoría</label>
                    <input type="text" name="catNombre"
                           value="<?= $categoria['catNombre']?>"
                           class="form-control" id="catNombre" required>
                    <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']?>">
                </div>

                <button class="btn btn-dark my-3 px-5">Modificar marca</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary sep">
                    Volver a panel de marcas
                </a>
            </form>
        </div>

    </main>

<?php  include 'layouts/footer.php';  ?>
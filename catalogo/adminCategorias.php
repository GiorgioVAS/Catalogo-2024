<?php
require 'config/config.php';
require 'funciones/conexion.php';
require 'funciones/categorias.php';
require 'funciones/autenticacion.php';
autenticar();
$categorias = listarCategorias();

include 'layouts/header.php';
include 'layouts/nav.php';
?>

<main class="container py-4">
    <h1 class="text-white">Panel de administración de categorías</h1>

    <a href="admin.php" class="btn btn-outline-secondary my-2">
        Volver a dashboard
    </a>

    <table class="table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>CATEGORIAS</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-outline-secondary">
                        Agregar
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($categoria = mysqli_fetch_assoc($categorias)) {
            ?>
                <tr>
                    <td><?= $categoria['idCategoria'] ?></td>
                    <td><?= $categoria['catNombre'] ?></td>
                    <td>
                        <a href="formModificarCategoria.php?idCategoria=<?= $categoria['idCategoria'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarCategoria.php?idCategoria=<?= $categoria['idCategoria'] ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <a href="admin.php" class="btn btn-outline-secondary my-2">
        Volver a dashboard
    </a>

</main>

<?php include 'layouts/footer.php';  ?>
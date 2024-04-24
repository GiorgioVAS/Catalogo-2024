<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario para subir un archivo</h1>

        <div class="col-6 mx-auto my-3 p-4 alert alert-secondary">
<?php
    //capturamos archivo capturado
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';
?>
    Nombre del archivo :<?= $_FILES['prdImagen']['name'] ?>
    <br>
    Tipo del archivo :<?= $_FILES['prdImagen']['type'] ?>
<?php
        //Directorio
        $dir = 'productos/';
        $nombreOriginal = $_FILES['prdImagen']['name'];
        $ext = pathinfo($nombreOriginal, PATHINFO_EXTENSION); //Extension del archivo osea .jpg
        $tmp = $_FILES['prdImagen']['tmp_name'];
        ### Renombramos el archivo
        $nombreNuevo = time().'.'.$ext;
        ### movemos el archivo a la carpeta productos
        move_uploaded_file($tmp, $dir.$nombreNuevo);
?>  
<br>
        <?= time()?>
        </div>
    </main>
<?php
    include '../layouts/footer.php';

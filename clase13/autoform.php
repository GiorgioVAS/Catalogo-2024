<?php
include '../layouts/header.php';
?>
<main class="container py-3">
    <h1>Autoform</h1>

    <div class="alert col-8 shadow">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <input type="text" name="dato" class="form-control" id="">
            <button class="btn btn-success">enviar</button>
        </form>
    </div>

    <?php
    if (isset($_GET['dato'])) {

    ?>
        <div class="alert col-8 shadow">
            dato enviado: <?= $_GET['dato'] ?>
        </div>
    <?php
    }
    ?>
</main>
<?php
include '../layouts/footer.php';

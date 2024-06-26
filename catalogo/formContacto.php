<?php
    require 'config/config.php';
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Formulario de contacto</h1>


        <div class="alert p-4 col-8 my-5 mx-auto shadow">
            <form action="contacto.php" method="post">

                <div class='form-group mb-2'>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"
                           class='form-control' id="nombre" required>
                </div>
                <div class='form-group'>
                    <label for="email">Email</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" name="email"
                               class="form-control" id="email" required>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="consulta">Consulta</label>
                    <textarea name="consulta" class="form-control" id="consulta" required></textarea>
                </div>


                <button class='btn btn-success my-3 px-4'>Enviar</button>
            </form>

    </main>

<?php
    include 'layouts/footer.php';
?>
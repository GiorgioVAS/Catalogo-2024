<?php
    date_default_timezone_set('America/Lima');
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Manejo de errores</h1>

        <?php 
        
            $x = 5;

            // intentard hacer esto
            try{
                $y= 5/0;
                echo $y;
            }
            //capturar 
            catch( Error $e){
                echo 'Fecha:', date('d/m/Y H:i:s') ,'<br>';
                echo 'Error: ', $e->getMessage()  ,'<br>';
                echo 'Archivo: ', $e->getFile()  ,'<br>';
                echo 'Nro de Línea: ', $e->getLine()  ,'<br>';
                //echo 'Hubo un error';
            }
        
        ?>

    </main>
<?php
    include '../layouts/footer.php';
?>
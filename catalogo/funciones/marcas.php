<?php

function listarMarcas(): mysqli_result
{
    $link = conectar();
    $sql = "Select * 
                    From marcas
                    ORDER BY idMarca";

    $resultado = mysqli_query($link, $sql);

    return $resultado;
}

function verMarcaPorId()
{
    $idMarca = $_GET["idMarca"];

    $link = conectar();
    $sql = "SELECT * FROM marcas WHERE idMarca = " . $idMarca;
    $resultado = mysqli_query($link, $sql);
    $marcas = mysqli_fetch_assoc($resultado);
    return $marcas;
}

function agregarMarca(): bool
{
    //capturamos el dato enviado por el formulario
    $mkNombre = $_POST['mkNombre'];
    //Nos conectamos a la base de datos
    $link = conectar();
    //Creamos el mensaje sql
    $sql = "INSERT INTO marcas VALUE
                                        (
                                            DEFAULT,
                                            '" . $mkNombre . "'
                                             )";

    try {
        $resultados = mysqli_query($link, $sql);
        return $resultados;
    }
    //Exception es hijo de la error y se utiliza solo en la bbdd
    catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    return $resultados;
}

function modificarMarca()
{

    //capturamos dato enviado por el form
    $mkNombre = $_POST['mkNombre'];
    $idMarca = $_POST['idMarca'];
    $link = conectar();
    $sql = "UPDATE marcas
                    set mkNombre ='" . $mkNombre . "'
                    WHERE idMarca = " . $idMarca;
    try {
        $resultados = mysqli_query($link, $sql);
        return $resultados;
    }
    //Exception es hijo de la error y se utiliza solo en la bbdd
    catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}

//Verificamos si hay una marca asociada en la tabla con id
function verificarProductoPorMarca(): int
{
    $idMarca = $_GET["idMarca"];

    $link = conectar();
    $sql = 'SELECT 1 FROM productos
                    WHERE idMarca =' . $idMarca;
    $resultado = mysqli_query($link, $sql);

    //Cuenta la cantidad de cuantos registros devuelve una consulta
    $cantidad = mysqli_num_rows($resultado);

    return $cantidad;
}

function eliminarMarca(): bool
{
    $idMarca = $_POST["idMarca"];

    $link = conectar();
    $sql = "DELETE FROM  marcas 
                   WHERE idMarca = " . $idMarca;
    //Ejecuta
    try {
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }
    //Si hay un problema
    catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}

/* mysqli_num_rows se encarga de contar la cantidad de
        productos que hay dentro de una tabla
    */
/*TODO LO QUE CAMBIA , ELIMINAR O HAY UN IMPACTO EN LA TABLA SE USA
      EL TRY Y CATCH
    */

/**
 * CRUD DE MARCAS
 * 
 * listarMarcas()
 * verMarcaID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * 
 */

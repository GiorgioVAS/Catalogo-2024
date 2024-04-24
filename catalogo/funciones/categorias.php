<?php

    function listarcategorias(){

        $link = conectar();

        $sql = 'SELECT * FROM categorias ORDER BY idCategoria';

        $resultados = mysqli_query($link , $sql );

        return $resultados;
    }

    function verCategoriaId(){

        $idCategoria = $_GET['idCategoria'];

        $link = conectar();

        $sql = "SELECT * FROM categorias WHERE idCategoria = ".$idCategoria;

        $resultado = mysqli_query($link , $sql);

        $categoria = mysqli_fetch_assoc($resultado);
        
        return $categoria;
    }

    function agregarCategoriaID() :bool 
    { 
        
        $catNombre = $_POST['catNombre'];

        $link = conectar();

        $sql = "INSERT INTO categorias VALUE ( 
                                                DEFAULT, 
                                            '". $catNombre."'
                                                )";
        
        try{

            $resultados = mysqli_query($link , $sql);
            return $resultados;
        }
        catch( Exception $e){
            //Exception es hijo de la error y se utiliza solo en la bbdd
            echo $e->getMessage();
            return false;
        }
        
        return $resultados;

    }

    function modificarCategoria()  {

        $catNombre = $_POST["catNombre"];
        $idCategoria = $_POST["idCategoria"];

        $link = conectar();

        $sql = "UPDATE categorias 
                            set catNombre ='".$catNombre."'
                            WHERE idCategoria =".$idCategoria;

        try{
            $resultado = mysqli_query($link, $sql);
            return $resultado;
        }
        //Exception es hijo de la error y se utiliza solo en la bbdd
        catch(Exception $e){
            echo $e->getMessage();
            return false;
        }

    }
    // Verificar nombre por el producto
    function verificarProductoPorCategoria() : int
    {
        $idCategoria = $_GET['idCategoria'];

        $link=conectar();

        $sql = "SELECT 1 FROM categorias
                            WHERE idCategoria =".$idCategoria;

        $resultado = mysqli_query($link , $sql);
        //Cuenta la cantidad de cuantos registros devuelve una consulta
        $cantidad = mysqli_num_rows($resultado);
        
        return $cantidad;
    }

    function eliminarCategoria() :bool
    {
        $idCategoria = $_POST["idCategoria"];

        $link = conectar();
        $sql = "DELETE FROM categorias
                    WHERE idCategoria = ".$idCategoria;

        //Ejecuta
        try{
            $resultado = mysqli_query($link , $sql);
            return $resultado;
        }
        //Si hay un problema
        catch( Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    /**
     * CRUD DE CATEGORIAS
     * 
     * listarCategorias()
     * verCategoriaID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     * 
     */

?>
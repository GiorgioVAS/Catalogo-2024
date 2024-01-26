<?php

    function listarcategorias(){

        $link = conectar();

        $sql = 'SELECT * FROM categorias';

        $resultados = mysqli_query($link , $sql );

        return $resultados;
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
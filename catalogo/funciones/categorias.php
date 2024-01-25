<?php

    function listarCategorias(){

        $link = conectar();

        $sql = 'SELECT * FROM categorias';

        $resultados = mysqli_query($link , $sql );

        return listarCategorias();
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
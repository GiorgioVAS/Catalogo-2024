<?php

    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = "Select * 
                    From marcas
                    ORDER BY idMarca";

        $resultado = mysqli_query($link , $sql);
        
        return $resultado;
    }



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

?>

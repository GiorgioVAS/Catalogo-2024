<?php

    const SERVER = 'localhost';
    const USUARIO = 'root';
    const CLAVE = '';
    const BASE = 'categorias';

    function conectar() : mysqli
    {
        $conexion = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );

        return $conexion;
    }

?>
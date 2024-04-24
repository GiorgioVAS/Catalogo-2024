<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = '';
    const BASE      = 'catalogo';

    function conectar() : mysqli
    {
        $link = mysqli_connect(
                    SERVER,
                    USUARIO,
                    CLAVE,
                    BASE
        );
        return $link;
    }
?>
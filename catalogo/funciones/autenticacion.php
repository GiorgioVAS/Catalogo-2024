<?php

    function login() : void
    {
        $usuEmail = $_POST["usuEmail"];
        $usuClave = $_POST["usuClave"];
        $link = conectar();

        $sql = "SELECT idUsuario, usuNombre, usuApellido,
                        usuClave, idRol
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                     AND usuActivo = 1";
        $resultado = mysqli_query( $link, $sql);

        //Cuenta la coincidencia de datos  osea el correo
        $cantidad = mysqli_num_rows($resultado);
         
        /* si $cantidad = 0  -> se logueó MAL
           si $cantidad = 1 -> se logueó BIEN
        */

        if( $cantidad == 0){

            //redireccion a formLogin enviando error
            header('location: formLogin.php?error=1');
            return;
        }
        /*##
        ### acá sabemos que el email está correcto
        ### y que el usuario esta activo
        */

        //verificamos contraseña
        $arrayUsuario = mysqli_fetch_assoc($resultado);
        if(!password_verify($usuClave, $arrayUsuario["usuClave"]) ){
            /* Al negar password_verify() sabemos si se logueó mal
             * entonces redirigimos al forLogin con mensaje de error
             */

             header('location: formLogin.php?error=1');
             return;
        }
        /* Si llegamos a este punto el usuario se logueó correctamente
           entonces comenzamos la rutina de autenticación (sesiones)
         */
        ########## RUTINA DE AUTENTICACIÓN ##################
        
        $_SESSION['login'] = 1; //token o llave

        $_SESSION['usuEmail'] = $usuEmail;
        $_SESSION['usuNombre'] = $arrayUsuario['usuNombre'];
        $_SESSION['usuApellido'] = $arrayUsuario['usuApellido'];
        $_SESSION['idRol'] = $arrayUsuario['idRol'];
        $_SESSION['idUsuario'] = $arrayUsuario['idUsuario'];
        
        header('location: admin.php');
    }

    //Para salir del sistema

    function logout()
    {
        //Eliminamos todas las variables de sesion que estan dentro de un archivo
        session_unset();
        
        //Eliminamos la sesión , eliminamos el archivo sesion
        /*destruye el archivo de texto temporal donde se alojaron todos los datos */
        session_destroy();
    }

    function autenticar()
    {
        if(!isset( $_SESSION['login'])){
            header('location: formLogin.php?error=2');
        }
    }

    function noAdmin() : void
    {
        //Si el usuario no es administrador
        if($_SESSION['idRol'] != 1){
            //Redireccion a página noAdmin.php
            header('location: noAdmin.php');
        }
    }


    /*
        La sesion es donde se almacena los datos
    
    */
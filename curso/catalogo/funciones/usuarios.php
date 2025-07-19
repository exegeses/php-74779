<?php

    /**
     * función de registro de usuarios
     * esta función da de alta un usuario
     * con un tipo usuario (idRol = 3)
     * de manera predeterminada
     * @return bool
     * */
    function registrarUsuario() : void
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];// sin encryptar
        // encryptamos clave
        $claveHash = password_hash($clave, PASSWORD_DEFAULT);
        $link = conectar();
        $sql = "INSERT INTO usuarios
                  VALUES
                    (
                     default,
                     '".$nombre."', 
                     '".$apellido."', 
                     '".$email."', 
                     '".$claveHash."',
                     default,
                     default
                     )";
        try {
            $resultado = mysqli_query($link, $sql);
            //notificaciones
            $_SESSION['css'] = 'success';
            $_SESSION['mensaje'] = 'Usuario: '.$nombre.' agregado correctamente';
            //redirección a index
            header('Location: formLogin.php');
        }catch ( Exception $e ) {
            //notificaciones
            $_SESSION['css'] = 'danger';
            $_SESSION['mensaje'] = 'No se pudo agregar el usuario: '.$nombre;
            //redirección a formLogin
            header('Location: formRegistrarUsuario.php');
        }
        /*//redirección a index
        header('Location: index.php');*/
    }
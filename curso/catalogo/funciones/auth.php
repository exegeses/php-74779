<?php

    function login() : void
    {
        $email = $_POST['email'];
        $clave = $_POST['clave']; // sin encriptar
        $link = conectar();
        $sql = "SELECT * 
                  FROM usuarios 
                  WHERE activo = 1 
                    AND  email = '".$email."'";
        $result = mysqli_query($link, $sql);
        $qty = mysqli_num_rows($result);
        /* si la cantidad == a 0 no hay coincidencia
        ## si la cantidad == a 1  hay coincidencia
         * */
        if( $qty == 0 ){
            // redirección a formLogin con mensaje de error
            header("Location: formLogin.php?error=1");
            return;
        }
        # en este punto sabemos que el e-mail ingresado es correcto
        # y que el usuario está activo
        ##### verificamos la contraseña
        $usuario = mysqli_fetch_assoc($result);
        if( !password_verify($clave, $usuario['clave']) ){
            // redirección a formLogin con mensaje de error
            header("Location: formLogin.php?error=1");
            return;
        }
        /* si llegamos a este punto
         * sabemos que el usuario se logueó correctamente
         * ahora vamos autenticarlo
         * y almacenar en una sesión los datos para personalización
         * */
        #### Auth
        $_SESSION['login'] = 1;
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['apellido'] = $usuario['apellido'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['idRol'] = $usuario['idRol'];
        // redirección a admin
        header("Location: admin.php");
    }
    function logout() : void
    {
        // eliminamos variables de sesión (opcional)
        session_unset();
        // eliminamos la sesión
        session_destroy();
        // redirección a index con delay
        header("refresh:3;url=index.php");
    }

    /**
     * función para chequear que el usuario esté logueado
     * @return void
     */
    function auth() : void
    {
        if( !isset($_SESSION['login']) ){
            header("Location: formLogin.php?error=2");
        }
    }
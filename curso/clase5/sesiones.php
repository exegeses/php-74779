<?php
    // directiva de sesión
    session_start();

    // registramos variables de sesión
    $_SESSION['nombre'] = 'belcebu';
    $_SESSION['numero'] = 666;

    //serializado
    // nombre|s:5:"azael";numero|i:666;
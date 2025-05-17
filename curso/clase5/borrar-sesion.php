<?php

    session_start();
    // eliminar 1 variable
    unset($_SESSION['numero']);

    // eliminar todas las variables de sesión
    session_unset();

    // eliminar la sesión de visita
    session_destroy();
<?php

    const SERVER_NAME = "localhost";
    const USUARIO = "root";
    const CLAVE = "root";
    const BASE = "catalogo74779";
    function conectar() : mysqli | false
    {
        try {
            $link = mysqli_connect
            (
                SERVER_NAME,
                USUARIO,
                CLAVE,
                BASE
            );
            return $link;
        }
        catch ( Exception $e ) {
            /* redireccion */
            header('location: no-conectado.php');
            return false;
        }
    }
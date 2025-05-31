<?php
    ## función para conectar a servidor de MySQL
    const SERVER = "localhost";
    const USUARIO = "root";
    const CLAVE = "root";
    const BASE = "catalogo74779";

/**
 * función de conexion a Mysql
 * @return mysqli|false
 */
    function conectar() : mysqli | false
    {
        try {
            $link = mysqli_connect(
                    SERVER,
                    USUARIO,
                    CLAVE,
                    BASE
                    );
            return $link;
        }
        catch ( Exception $e) {
            /* redirección a archivo */
            header('location: no-conectado.php');
            return false;
        }
    }
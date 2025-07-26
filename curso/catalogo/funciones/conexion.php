<?php
    ## función para conectar a servidor de MySQL
    const SERVER = 'localhost';//'sql309.infinityfree.com';
    const USUARIO = 'root';// 'if0_39565334';
    const CLAVE = 'root';//'IYYeHLvmdzIu';
    const BASE = 'catalogo74779';//'if0_39565334_catalogo';

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
<?php

    function validarImagen( string $archivo ) : bool
    {
        /* $salida = false;
        if (str_starts_with($archivo, 'image/')) {
            $salida = true;
        }
        return $salida; */
        return str_starts_with($archivo, 'image/');
    }
    function subirImagen() : string
    {

        // si no se envió imagen
        $prdImagen = 'noDisponible.svg';

        // si se envió imagen y NO HAY ERRORES
        if( $_FILES['prdImagen']['error'] == 0 ){
            $tmp = $_FILES['prdImagen']['tmp_name'];
            $path = 'productos/';
            //renombrado
            $nombre = time(); //timestamp
            $ext = pathinfo($_FILES['prdImagen']['name'], PATHINFO_EXTENSION);
            $prdImagen = $nombre.'.'.$ext;
            // sube imagen
            move_uploaded_file($tmp, $path.$prdImagen); // copy()
        }

        return $prdImagen;
    }

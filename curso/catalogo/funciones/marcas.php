<?php

/**
 * función para obtener un listado de marcas
 * @return mysqli_result (un objeto con el listado)
 */
    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * FROM marcas
                    ORDER BY idMarca DESC";
        return mysqli_query($link, $sql);
    }

    function agregarMarca() : bool
    {
        // capturamos dato enviado por el form
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas 
                        (mkNombre) 
                    VALUE ('".$mkNombre."')";
        $resultado = false;
        try {
            $resultado = mysqli_query($link, $sql);
            //notificaciones
            $_SESSION['css'] = 'success';
            $_SESSION['mensaje'] = 'Marca: '.$mkNombre.' agregada correctamente';
            // redireccion a adminMarcas
        }
        catch (Exception $e){
            //notificaciones
            $_SESSION['css'] = 'danger';
            $_SESSION['mensaje'] = 'No se pudo agregar la marca: '.$mkNombre;
        }
        header('Location: adminMarcas.php');
        return $resultado;
    }

    /**
     * función para mostrar los datos de una marca filtrada por su ID
     * @return array (arre y asociativo con los datos de la marca)
     */
    function verMarcaPorID() : false | array
    {
        if ( !isset($_GET['idMarca'])) {
            $_SESSION['css'] = 'warning';
            $_SESSION['mensaje'] = 'Marca no encontrada';
            header('Location: adminMarcas.php');
            return false;
        }
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT * 
                    FROM marcas 
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql);
        return mysqli_fetch_assoc($resultado);
    }
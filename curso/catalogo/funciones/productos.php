<?php

    /**
     * función para obtener listado de productos
     * @return mysqli_result (objeto de resultados)
     */
    function listarProductos() : mysqli_result
    {
        $link = conectar();
        $query = "SELECT * 
                    FROM productos 
                    JOIN marcas 
                        ON productos.idMarca = marcas.idMarca 
                    JOIN categorias
                        ON productos.idCategoria = categorias.idCategoria
                    ORDER BY idProducto DESC";
        return mysqli_query($link, $query);
    }

    function verProductoPorID() : array
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $query = "SELECT * 
                    FROM productos 
                    JOIN marcas 
                        ON productos.idMarca = marcas.idMarca 
                    JOIN categorias
                        ON productos.idCategoria = categorias.idCategoria
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $query);
        return mysqli_fetch_assoc($resultado);
    }

function subirImagen() : string
{
    // si no se envió imagen agregar()
    // $prdImagen = 'noDisponible.svg';

    // si no se envió imagen modificar()
    /*if ( isset($_POST['imgActual']) ) {
        $prdImagen = $_POST['imgActual'];
    }*/
    // $prdImagen = ( isset($_POST['imgActual']) ) ? $_POST['imgActual'] : $prdImagen;
    $prdImagen = $_POST['imgActual'] ?? 'noDisponible.svg';


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

function borrarImagen() : void
{
    $path = 'productos/';
    $prdImagen = $_POST['prdImagen'];
    if(
        $prdImagen != 'noDisponible.svg'
            &&
        file_exists($path.$prdImagen)
    ){
        unlink($path.$prdImagen);
    }
}

function agregarProducto() : bool
    {
        // capturamos datos enviados por el formulario
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        // subir imagen *
        $prdImagen = subirImagen();
        $link = conectar();
        $sql = "INSERT INTO productos
                  VALUES
                      (
                         default,
                         '".$prdNombre."', 
                         ".$prdPrecio.",
                         ".$idMarca.",
                         ".$idCategoria.",
                         '".$prdDescripcion."',
                         '".$prdImagen."',
                         default                       
                      )";
        try {
            $resultado = mysqli_query($link, $sql);
            $_SESSION['mensaje'] = "Producto: ".$prdNombre." agregado correctamente";
            $_SESSION['css'] = "success";
        }
        catch(Exception $e){
            // die( $e->getMessage() );
            $_SESSION['mensaje'] = 'No se pudo agregar el producto: '.$prdNombre;
            $_SESSION['css'] = "danger";
            $resultado = false;
        }
        header('location: adminProductos.php');
        return $resultado;
    }

    function modificarProducto() : bool
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos 
                   SET 
                        prdNombre = '".$prdNombre."',   
                        precio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdDescripcion = '".$prdDescripcion."',
                        prdImagen = '".$prdImagen."'
                   WHERE idProducto = ".$idProducto;
        try {
            $resultado = mysqli_query($link, $sql);
            $_SESSION['mensaje'] = "Producto: ".$prdNombre." modificado correctamente";
            $_SESSION['css'] = "success";
        }
        catch(Exception $e){
            $resultado = false;
            $_SESSION['mensaje'] = 'No se pudo modificar el producto: '.$prdNombre;
            $_SESSION['css'] = "danger";
        }
        header('location: adminProductos.php');
        return  $resultado;
    }

    function eliminarProducto() : bool
    {
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $link = conectar();
        try {
            $sql = "DELETE FROM productos
                       WHERE idProducto = ".$idProducto;
            $resultado = mysqli_query($link, $sql);
            $_SESSION['mensaje'] = "Producto: ".$prdNombre." eliminado correctamente";
            $_SESSION['css'] = "success";
            // borrado de imagen
            borrarImagen();
        }
        catch(Exception $e){
            $_SESSION['mensaje'] = 'No se pudo eliminar el producto: '.$prdNombre;
            $_SESSION['css'] = "danger";
            $resultado = false;
        }
        header('location: adminProductos.php');
        return $resultado;
    }
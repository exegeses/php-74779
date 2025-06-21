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

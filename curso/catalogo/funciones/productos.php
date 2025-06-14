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

    function agregarProducto() : void
    {
        // capturamos datos enviados por el formulario
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        // subir imagen *

        $link = conectar();
    }
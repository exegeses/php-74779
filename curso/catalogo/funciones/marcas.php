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
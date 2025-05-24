<?php

    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * 
                    FROM marcas 
                    ORDER BY idMarca";
        return mysqli_query($link, $sql);
    }

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */

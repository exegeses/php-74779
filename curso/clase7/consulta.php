<?php

    require 'conexion.php';
    $link = conectar();
    $sql = "SELECT * FROM marcas";
    $result = mysqli_query($link, $sql);
    /*
     * $result tiene un objeto
     *     de tipo mysqli_result
     * */
    print_r($result);
    echo '<br>';
    echo mysqli_num_fields($result), ' columnas';
    echo "<br>";
    echo mysqli_num_rows($result), ' registros';
    echo '<hr>';

    while( $fila = mysqli_fetch_assoc($result) ){
        echo $fila['idMarca'],' ', $fila['mkNombre'], '<br>';
    }
<?php

// conexión a server
$link = mysqli_connect(
        'localhost',
        'root',
        'root',
        'catalogo74779'
        );

//mensaje sql
$sql = 'SELECT * FROM marcas ORDER BY idMarca';

//ejecución de SQL
$resultado = mysqli_query($link, $sql);

//reporte
while( $marca = mysqli_fetch_assoc($resultado) ){

    echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';

}
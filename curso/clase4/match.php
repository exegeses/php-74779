<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Expresión match()</h1>
<?php
    /* mostrar el nombre de día de la semana en español */
    //$numero = date('l'); // Saturday
    $numero = date('w');// 6
    echo $numero;
?>
    <br>
<?php
    $semana = [
        'Domingo', 'Lunes', 'Martes',
        'Miércoles', 'Jueves', 'Viernes',
        'Sábado'
    ];
    echo $semana[$numero];
?>
    <br>
<?php
    $diaSemana = match( $numero ){
        '0' => 'Domingo',
        '1' => 'Lunes',
        '2' => 'Martes',
        '3' => 'Miercoles',
        '4' => 'Jueves',
        '5' => 'Viernes',
        default => 'Sábado'
    };
    echo $diaSemana;
?>
    </main>
<?php
include '../layouts/footer.php';

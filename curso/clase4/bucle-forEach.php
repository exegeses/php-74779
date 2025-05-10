<?php
    include '../layouts/header.php';
    $marcas = [
        'Hermès', 'Zara', 'Boss',
        'Aeropostale', 'Tommy', 'Gola',
        'Hollister', 'Abercrombie', 'JCrew',
        'London Heckett',
        'Uniqlo'
    ];
    $capitales = [
        'Argentina' => 'Buenos Aires',
        'Brasil' => 'Brasilia',
        'Chile' => 'Santiago',
        'Colombia' => 'Bogotá',
        'Venezuela' => 'Caracas',
        'Uruguay' => 'Montevideo',
        'Paraguay' => 'Asunción'
    ];

$pilotos = [
    4 => 'Lando Norris',
    81 => 'Oscar Piastri',
    1 => 'Max Verstappen',
    22 => 'Yuki Tsunoda',
    63 => 'George Russell',
    12 => 'Kimi Antonelli',
    16 => 'Charles Leclerc',
    44 => 'Lewis Hamilton',
    43 => 'Franco Colapinto'
];

?>
    <main class="container py-4">
        <h1>Bucle forEach()</h1>

        <section class="shadow alert my-3">
<?php
    //foreach( $coleccion as $auxiliar )
    foreach ( $marcas as $marca) {
?>            
            <?= $marca ?><br>
<?php
    }
?>            
        </section>

        <section class="shadow alert my-3">
<?php
        //foredach( coleccion as llave => valor )
        foreach ( $capitales as $pais => $capital ) {
?>
            <?= $pais ?>: <?= $capital ?><br>
<?php
        }
?>
        </section>

        <section class="shadow alert my-3">
<?php
        foreach ( $pilotos as $numero => $piloto ) {
?>
            <?= $piloto ?>: <?= $numero ?><br>
<?php
        }
?>
        </section>

    </main>
<?php
include '../layouts/footer.php';

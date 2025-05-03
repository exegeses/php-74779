<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Arrays en PHP</h1>

        <section class="shadow my-3 alert">
<?php
    // orden predeterminado con llave numérica
    $marcas = [
        'Hermès', 'Zara', 'Boss',
        'Aeropostale', 'Tommy', 'Gola',
        'Hollister', 'Abercrombie', 'JCrew',
        'London Heckett',
        'Uniqlo'
    ];
    //echo $marcas; // Warnig: Array to string conversion
?>
        <pre>
            <?php print_r($marcas); ?>
        </pre>
        <?= $marcas[5] ?>
        </section>

        <section class="shadow my-3 alert">
<?php
        // asignando la llave =>
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
        //array_push($pilotos, 'Pierre Gastly');
        $pilotos[10] = 'Pierre Gastly';
?>
        <pre>
            <?php print_r($pilotos); ?>
        </pre>
            <?= $pilotos[43] ?>
        </section>
        
        
    </main>
<?php
include '../layouts/footer.php';

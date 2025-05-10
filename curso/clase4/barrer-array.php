<?php
    include '../layouts/header.php';
    $marcas = [
        'Hermès', 'Zara', 'Boss',
        'Aeropostale', 'Tommy', 'Gola',
        'Hollister', 'Abercrombie', 'JCrew',
        'London Heckett',
        'Uniqlo'
    ];
    $cantidad = count($marcas);
?>
    <main class="container py-4">
        <h1>Recorrer un array</h1>
        <section class="shadow my-3 alert">
            <ul class="list-group">
<?php
        for( $n = 0; $n < $cantidad; $n++ ){
?>
                <li class="list-group list-group-item-action">
                    <?= $marcas[$n] ?>
                </li>
<?php
        }
?>
            </ul>
        </section>

    </main>
<?php
include '../layouts/footer.php';

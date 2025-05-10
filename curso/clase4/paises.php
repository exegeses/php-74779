<?php
    include '../layouts/header.php';
    // Array con nombres de países
    $paises = [
        "Argentina", "Brasil", "Chile",
        "Perú", "Colombia", "México",
        "Ecuador", "Uruguay"
    ];

    // Array con las capitales correspondientes a los países
    $capitales = [
        "Buenos Aires", "Brasilia", "Santiago",
        "Lima", "Bogotá", "Ciudad de México",
        "Quito", "Montevideo"
    ];
    // Array con las banderas correspondientes a los países
    $banderas = [
        'ar', 'br', 'cl',
        'pe', 'co', 'mx',
        'ec','uy'
    ];
    $count = count($paises);
?>
    <main class="container py-4">
        <h1>Listado de países</h1>

        <section class="row">
<?php
        for( $n = 0; $n < $count; $n++ ) {
?>        
        <div class="card col-6" >
            <img src="flags/<?= $banderas[$n] ?>.webp" class="card-img-top">
            <div class="card-body">
                <h2><?= $paises[$n] ?></h2>
                Capital: <?= $capitales[$n] ?>
            </div>
        </div>
<?php
        }
?>
        </section>
    </main>
<?php
include '../layouts/footer.php';

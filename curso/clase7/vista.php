<?php
    require 'conexion.php';
    require 'simul-marcas.php';
    require 'simul-productos.php';
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>colisión</h1>

        <?php
            verMarcas();
            echo '<br>';
            verProductos();
        ?>

    </main>
<?php
include '../layouts/footer.php';

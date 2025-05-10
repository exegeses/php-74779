<?php
    include '../layouts/header.php';
    $posicion_mundial = $_GET["posicion"];

    $qatar_2022 = match ($posicion_mundial) {
        '1' => "Argentina",
        '2' => "Francia",
        '3' => "Croacia",
        '4' => "Marruecos",
        default => "No se encontró el país"
    };


?>
    <main class="container py-4">
        <h1>Tema de la página</h1>
        Selección: <?= $qatar_2022 ?>
    </main>
<?php
    include '../layouts/footer.php';

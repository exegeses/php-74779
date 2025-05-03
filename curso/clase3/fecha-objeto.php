<?php
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Objeto de fecha</h1>
    <?php
        // usando Datetime()
        $fecha = new DateTime();
        $timeZone = new DateTimeZone('America/Argentina/Buenos_Aires');

        $fecha->setTimeZone($timeZone);

        echo $fecha->format('d/m/Y H:i:s');
    ?>

    </main>
<?php
include '../layouts/footer.php';

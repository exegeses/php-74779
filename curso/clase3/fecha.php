<?php
    include '../layouts/header.php';
    /*
     * mostrar fecha y hora actual
     * formato: dd/mm/yyyy hh:mm:ss     03/05/2025 11:33:40
     * */
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('d/m/Y H:i:s');
    $numDiaSemana = date('w');
    /* versión if/elseif */
    switch ($numDiaSemana) {
        case 0:
            $diaSemana = "Domingo";
            break;
        case 1:
            $diaSemana = "Lunes";
            break;
        case 2:
            $diaSemana = "Martes";
            break;
        case 3:
            $diaSemana = "Miercoles";
            break;
        case 4:
            $diaSemana = "Jueves";
            break;
        case 5:
            $diaSemana = "Viernes";
            break;
        default:
            $diaSemana = "Sábado";
            break;
    }
?>
    <main class="container py-4">
        <h1>Fecha usando PHP</h1>
    <?= $diaSemana ?>
        <?= $fecha ?>

    </main>
<?php
include '../layouts/footer.php';

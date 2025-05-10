<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Bucle while</h1>
        <section class="shadow alert my-3">
<?php
        $n = 1;
        while( $n < 15 ){
            // bloque de código a iterar
            echo $n, '<br>';
            $n++;
        }
?>
        </section>

        <section class="shadow alert my-3">
            <select name="anio" class="form-select">
                <option value="">Seleccione un año</option>
                <?php
                $y = date('Y');
                while( $y >= 1970 ){
                ?>
                    <option value="<?= $y ?>"><?= $y ?></option>
                <?php
                    $y--;
                }
                ?>
            </select>
        </section>


    </main>
<?php
include '../layouts/footer.php';

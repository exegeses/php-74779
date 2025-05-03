<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Proceso de dato enviado</h1>

        <section class="shadow my-3 alert">
        <?php
            $numero = $_POST['numero'];
            if( $numero < 100 ){
                // bloque de código a ejecuter si la condición es true
                echo '<img src="imgs/ok.png">';
            }
            else{
                // bloque de código a ejecuter si la condición es false
                echo '<img src="imgs/error.png">';
            }
        ?>            
        </section>

        <section class="shadow my-3 alert">
        <?php
            if( $numero < 100 ){
        ?>
                <img src="imgs/ok.png">
        <?php
            }else{
        ?>
                <img src="imgs/error.png">
        <?php
            }
        ?>
        </section>

        <section class="shadow my-3 alert">
        <?php
            $im = 'error';
            if( $numero < 100 ){
                $im = 'ok';
            }
        ?>
            <img src="imgs/<?php echo $im ?>.png">
        </section>

        <section class="shadow my-3 alert">
            <?php
                $im = $numero < 100 ? 'ok' : 'error';
            ?>
            <img src="imgs/<?= $im ?>.png">
        </section>

    </main>
<?php
include '../layouts/footer.php';

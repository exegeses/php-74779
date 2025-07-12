<?php
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Encriptar un dato</h1>

        <section class="shadow alert my-3">
            <p>
                En PHP tenemos la función password_hash() para encryptar datos
            </p>
            <?php
                $dato = 'asdfg';
                $datoHash = password_hash( $dato, PASSWORD_DEFAULT );//bcrypt2
                $datoHash2 = password_hash( $dato, PASSWORD_DEFAULT );
            ?>
            dato hasheado: <?= $datoHash ?>
            <br>
            dato hasheado 2: <?= $datoHash2 ?>

        </section>

    </main>
<?php
include '../layouts/footer.php';

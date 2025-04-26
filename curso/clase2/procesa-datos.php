<?php
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>muestreo de datos enviados</h1>

        <?php
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            echo 'Tu nobre es: ', $nombre;
            echo '<br>';
            echo 'Tu email es: ', $email;
        ?>

    </main>
<?php
    include '../layouts/footer.php';

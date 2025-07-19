<?php
    require 'config/config.php';
    require 'funciones/auth.php';
    logout();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Salir de sistema</h1>

        <article class="shadow alert my3">
            Gracias por su visita
        </article>
    </main>

<?php
    include 'layouts/footer.php';
?>
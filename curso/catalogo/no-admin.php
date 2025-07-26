<?php
    require 'config/config.php';
    require 'funciones/auth.php';
        auth();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>¡Advertencia!</h1>

        <article class="alert alert-warning p-4 col-8 mx-auto shadow">
            <i class="bi bi-exclamation-triangle fs-3"></i>
            &nbsp;
            Debe ser administrador para realizar esta tarea
        </article>
    </main>

<?php
    include 'layouts/footer.php';
?>
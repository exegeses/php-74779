<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Formulario de envío</h1>

        <section  class="shadow my-3 alert">
        <form action="procesa-numero.php" method="post">
            <input type="number" name="numero">
            <button class="btn btn-success">enviar</button>
        </form>
        </section>

    </main>
<?php
include '../layouts/footer.php';

<?php
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>formulario de envío</h1>

        <section class="shadow my-3">
            <form action="procesa-datos.php" method="post">
                <input type="text" name="nombre"> <br>
                <input type="text" name="email"> <br>
                <button class="btn btn-success"
                    >enviar</button>
            </form>
        </section>

    </main>
<?php
    include '../layouts/footer.php';

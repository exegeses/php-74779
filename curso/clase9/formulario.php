<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Publicación de archivo</h1>

        <article class="my-3 shadow p-3">
            <form action="subir-archivo.php" method="post" enctype="multipart/form-data">
                <input type="file" name="prdImagen" class="form-control">
                <button class="btn btn-success my-3">publicar</button>
            </form>
        </article>

    </main>
<?php
include '../layouts/footer.php';

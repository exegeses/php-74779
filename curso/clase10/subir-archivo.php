<?php
    require 'funciones.php';
    $prdImagen = $_FILES["prdImagen"]["type"];
    $check = validarImagen($prdImagen);
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Subir imagen + validación</h1>

<?php
    echo ($check) ? 'es imagen' : 'no es imagen';
    echo '<br>';
    echo $prdImagen = subirImagen();
?>
        <hr>
        <img src="productos/<?= $prdImagen ?>">

    </main>
<?php
    include '../layouts/footer.php';

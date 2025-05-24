<?php
    require 'funciones/conexion.php';
    require 'funciones/crud-marcas.php';
    $marcas = listarMarcas();
    include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Listado de marcas</h1>

        <article class="shadow alert">
            <ul>
<?php
        while ($marca = mysqli_fetch_assoc($marcas)) {
?>                
                <li>
                    <?= $marca['idMarca'] ?> -
                    <?= $marca['mkNombre'] ?>
                </li>
<?php
        }
?>                
            </ul>
        </article>

    </main>
<?php
include '../layouts/footer.php';

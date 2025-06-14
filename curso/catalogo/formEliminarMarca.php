<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    checkProductoXMarca();
    $marca = verMarcaPorID();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de una marca</h1>

        <!-- Notificación que no se puede eliminar
        <div class="alert alert-danger col-6 mx-auto">
            <i class="bi bi-exclamation-triangle fs-3 sep-r"></i>
            No se puede eliminar la marca ya que tiene productos relacionados
            <br>
            <a href="adminMarcas.php" class="btn btn-outline-secondary mt-3">
                Volver a panel de marcas
            </a>
        </div>
        -->

        <div class="alert alert-danger p-4 col-6 mx-auto shadow ">
            Se eliminará la marca: <span class="fs-4 sep"><?= $marca['mkNombre'] ?></span>
            <form action="eliminarMarca.php" method="post">
                <input type="hidden" name="idMarca"
                       value="<?= $marca['idMarca'] ?>">
                <input type="hidden" name="mkNombre"
                       value="<?= $marca['mkNombre'] ?>">
                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary sep">
                    Volver a panel de marcas
                </a>
            </form>
        </div>


    </main>

<?php  include 'layouts/footer.php';  ?>
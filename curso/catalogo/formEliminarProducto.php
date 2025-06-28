<?php
    require 'config/config.php';
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de un producto</h1>

        <div class="card mx-auto border-danger bg-danger-subtle text-danger-emphasis w-640">
            <div class="row g-0">
                <div class="col-md-4 py-3 px-2">
                    <img src="productos/noDisponible.svg" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-3">
                        <span class="fs-4 sep d-block">prdNombre</span>
                        <span class="d-block sep m-3">
                            <?= 'mkNombre' ?> -
                            <?= 'catNombre' ?>
                        </span>
                        <span class="d-block sep">$<?= 'prdPrecio' ?></span>
                        <form action="eliminarProducto.php" method="post">

                            <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                            <a href="adminProductos.php" class="btn btn-outline-secondary sep">
                                Volver a panel
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php
    include 'layouts/footer.php';
?>
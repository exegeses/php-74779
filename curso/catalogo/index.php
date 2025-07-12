<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app-claude.css">
</head>
<body>
<!-- nav -->
<?php include 'layouts/nav.php'; ?>
<!-- fin nav -->

<!-- notificaciones -->
<?php
include 'layouts/notificaciones.php';
?>

<div class="container-fluid">
    <h1 class="section-title">Catálogo de Productos</h1>

    <div class="row g-4">

<?php
    while ( $producto = mysqli_fetch_assoc($productos) ){
?>
        <div class="col-lg-4 col-md-6">
            <div class="card product-card">
                <div class="product-image tablet-image">
                    <div class="product-icon">
                        <!-- 📱 -->
                        <img src="productos/<?= $producto['prdImagen'] ?>" alt="">
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?= $producto['prdNombre'] ?></h3>
                    <div class="d-flex justify-content-end align-items-center mb-2">
                        <span class="price-current">$<?= $producto['precio'] ?></span>
                    </div>
                    <span class="marca-categoria ">
                        <?= $producto['mkNombre'] ?>
                        -
                        <?= $producto['catNombre'] ?>
                    </span>
                    <p class="product-description">
                        <?= $producto['prdDescripcion'] ?>
                    </p>
                </div>
            </div>
        </div>
<?php
    }
?>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
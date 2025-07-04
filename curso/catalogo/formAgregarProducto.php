<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
	include 'layouts/header.php';
	include 'layouts/nav.php';
?>

    <main class="container py-4">

        <h1>Alta de un producto</h1>

        <div class="alert p-4 col-8 mx-auto shadow">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="prdNombre">Nombre del Producto</label>
                    <input type="text" name="prdNombre"
                           class="form-control" id="prdNombre" required>
                </div>

                <label for="prdPrecio">Precio del Producto</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio"
                           class="form-control" id="prdPrecio" min="0" step="0.01" required>
                </div>

                <div class="form-group mb-4">
                    <label for="idMarca">Marca</label>
                    <select class="form-select" name="idMarca" id="idMarca" required>
                        <option value="">Seleccione una marca</option>
<?php
            while ($marca = mysqli_fetch_array($marcas)) {  
?>
                        <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
<?php
            }
?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="idCategoria">Categoría</label>
                    <select class="form-select" name="idCategoria" id="idCategoria" required>
                        <option value="">Seleccione una categoría</option>
<?php
            while ($categoria = mysqli_fetch_array($categorias)) {
?>
                        <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
<?php
            }
?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="prdDescripcion">Descripción del Producto</label>
                    <textarea name="prdDescripcion" class="form-control" id="prdDescripcion" required></textarea>
                </div>

                <div class="mt-1 mb-4">
                    <label for="prdImagen" class="form-label">Seleccione un archivo</label>
                    <input type="file" name="prdImagen" class="form-control" id="prdImagen">
                </div>

                <button class="btn btn-dark mr-3 px-4">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary sep">
                    Volver a panel de productos
                </a>

            </form>
        </div>
    </main>

<?php  include 'layouts/footer.php';  ?>
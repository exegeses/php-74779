<?php
    require 'config/config.php';
    require 'funciones/auth.php';
        auth();

include 'layouts/header.php';
	include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de categorías</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

<!-- notificaciones -->

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th colspan="2">
                        <a href="formAgregarCategoria.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>idCategoria</td>
                    <td>catNombre</td>
                    <td>
                        <a href="#!" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="#!" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layouts/footer.php';  ?>
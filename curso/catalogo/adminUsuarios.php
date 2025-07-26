<?php
    require 'config/config.php';
    require 'funciones/auth.php';
        auth();
        checkAdmin();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
        $usuarios = listarUsuarios();    
	include 'layouts/header.php';
	include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th> </th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
        while ( $usuario = mysqli_fetch_assoc($usuarios) ) {
            $img = ( $usuario['activo'] ) ? 'green' : 'red';
?>
                <tr>
                    <td><img src="imagenes/<?= $img ?>.png" class="img-activo"></td>
                    <td><?= $usuario['idUsuario'] ?></td>
                    <td><?= $usuario['nombre'] ?></td>
                    <td><?= $usuario['apellido'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="formModificarUsuario.php?idUsuario=<?= 'idUsuario' ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarUsuario.php?idUsuario=<?= 'idUsuario' ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
        }
?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layouts/footer.php';  ?>
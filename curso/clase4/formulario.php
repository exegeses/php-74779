<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Formulario</h1>

        <form action="posiciones.php" method="get" class="alert alert-dark">
            <select name="posicion" class="form-select">
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
                <option value="3">Tercero</option>
                <option value="4">Cuarto</option>
            </select>
            <button class="btn btn-info m-3">consultar</button>
        </form>

    </main>
<?php
include '../layouts/footer.php';

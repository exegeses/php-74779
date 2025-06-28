<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Combo selected</h1>
        <p>
            Cómo hacer para que quede seleccionada una opción de un desplegable
        </p>

        <select name="dato" class="form-select">

            <option value="1">item 1</option>
            <option value="2">item 2</option>
            <option value="3">item 3</option>
            <option value="4">item 4</option>
            <option value="5">item 5</option>
            <option selected value="6">seleccionado x</option>
            <option value="7">item 7</option>
            <option value="8">item 8</option>
            <option value="9">item 9</option>
            <option value="10">item 10</option>

        </select>

    </main>
<?php
include '../layouts/footer.php';

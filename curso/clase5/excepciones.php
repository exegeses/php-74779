<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Manejo de excepciones</h1>

<?php
    $n = 10;
    $d = 0;

    try{
        echo $n/$d;
    }
    catch( Throwable $th )
    {
        echo 'el divisor no puede ser 0';
    }

?>

    </main>
<?php
include '../layouts/footer.php';

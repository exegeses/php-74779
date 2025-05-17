<?php
    include '../layouts/header.php';
    function saludar( string $nombre ) : string
    {
        return 'hola '.$nombre;
    }

    function sumar ( float $num1 , float $num2 ) : float
    {
        return $num1 + $num2;
    }

/* Type hinting
    Cuando nosotros mencionamos dentro de los paréntesis de una función
    el parámetro que vamos a utilizar, no necesitamos definir el tipo de datos
    Sin embargo es una buena práctica definir qué tipo de dato va a hacer ese parámetro
    Lo mismo sucede con un valor de retorno
*/

?>
    <main class="container py-4">
        <h1>Funciones definidas por el usuario</h1>

    <?= saludar('Rick') ?><br>
    <?= saludar('Morty') ?><br>
    <?= saludar('Summer') ?><br>

    <hr>

    <?= sumar(3, 5) ?> <br>
    <?= sumar(10, 20) ?> <br>
    <?= sumar(2.5, 10) ?> <br>


    </main>
<?php
include '../layouts/footer.php';

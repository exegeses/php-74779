<?php
    include '../layouts/header.php';
    /*
     * declarar una función que divida dos números
     * chequear que ambos parámetros sean numéricos
     * */

    function dividir( float $num1, float $num2  ) : float | string
    {
        try {
            if( is_numeric($num1) && is_numeric($num2) ){
                $resultado = $num1 / $num2;
            }
            return $resultado;
        }
        catch( Throwable $th ){
            return 'Ambos operadores deben ser números';
        }
    }

?>
    <main class="container py-4">
        <h1>múltiples tipos de datos</h1>

        <?= dividir( 50,3 ) ?> <br>
        <?= dividir( 50,'peras' ) ?> <br>

    </main>
<?php
include '../layouts/footer.php';

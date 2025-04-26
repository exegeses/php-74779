<?php
    include '../layouts/header.php';
    /*
     * para declarar una variable en PHP 
     * utilizamos el símbolo $
     * seguido de una palabra o cadena 
     * que no debe comenzar con un número ni tener espacios 
    */
    $numero = 3.14;
    $curso = 'Desarrollo web con PHP y MySQL';

    /*
     * para declarar una constante en PHP
     * utilizamos la palabra reservada 'const'
     * seguido de una palabra o cadena
     * que no debe comenzar con un número ni tener espacios
     * se recomienda que los nombres de las constantes sean en mayúscula
    */
    const PI = 3.141592;
    const NOMBRE = 'Marcos';
    const APELLIDO = 'Pinardi';
?>
    <main class="container py-4">
        <h1> variables y constantes en PHP</h1>

        <p class="alert alert-secondary">
            <?php
                echo 'el curso es: ', $curso
            ?>
        </p>

        <p class="alert alert-secondary">
            <?php
                echo 'el número es:', $numero
            ?>
            <br>
            <?php
                $numero = 10;
                echo 'el número es:', $numero
            ?>
        </p>

        <p class="alert alert-secondary">
            Nombre: <?php
                        echo NOMBRE, ' ', APELLIDO
                    ?>
        </p>
        
        <?php
            //PI = 3;
            # no se puede sobre escribir una constante
        ?>
        
    </main>
<?php
    include '../layouts/footer.php';

<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Arrays asociativos</h1>
        <p> una Red asociativo es aquel que tiene una llave de tipo string</p>
        <?php
            $capitales = [
                            'Argentina' => 'Buenos Aires',
                            'Brasil' => 'Brasilia',
                            'Chile' => 'Santiago',
                            'Colombia' => 'Bogotá',
                            'Venezuela' => 'Caracas',
                            'Uruguay' => 'Montevideo',
                            'Paraguay' => 'Asunción'
                         ];
        ?>
        <pre class="alert alert-dark">
            <?php
                print_r($capitales);
            ?>
        </pre>
        Capital: <?= $capitales['Argentina'] ?> <br>

        <article class="alert shadow my-3">
        <?php
            if ( array_key_exists('Argentina', $capitales) ) {
                echo "La capital de Argentina es " . $capitales['Argentina'];
            } else {
                echo "No se encontró la capital de Argentina <br>";
            }
        ?>
        </article>

    </main>
<?php
include '../layouts/footer.php';

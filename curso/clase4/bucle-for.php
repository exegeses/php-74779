<?php
include '../layouts/header.php';
?>
    <main class="container py-4">
        <h1>Bucle for()</h1>
        <section class="shadow alert my-3">
<?php
        //for( inicio; condición; incremento )
        for( $n=1; $n < 15; $n++ ) {
            echo $n,  '<br>';
        }
?>
        </section>
    </main>
<?php
include '../layouts/footer.php';

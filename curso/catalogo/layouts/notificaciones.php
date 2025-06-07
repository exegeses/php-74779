<?php
    if ( isset($_SESSION['mensaje']) ){
?>
    <div class="alert alert-<?= $_SESSION['css'] ?> p-4 col-8 mx-auto shadow">
        <i class="bi bi-info-circle fs-4 me-2"></i>
        <?= $_SESSION['mensaje'] ?>
    </div>
<?php
        unset($_SESSION['css']);
        unset($_SESSION['mensaje']);
    }
?>
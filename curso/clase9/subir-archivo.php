<?php
    include '../layouts/header.php';
    $archivo = $_FILES['prdImagen'];

    /* move_uploaded_file( origen, destino ) */
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $path = 'productos/';
    //$nombre = $_FILES['prdImagen']['name'];
    $nombre = time(); //timestamp
    $ext = pathinfo($_FILES['prdImagen']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($tmp, $path.$nombre.'.'.$ext); // copy()
?>
    <main class="container py-4">
        <h1>Publicación de archivo</h1>

        <article class="my-3 shadow p-3">
            <pre class="fs-3">
<?php
        // el misterio de $_FILES[]
        print_r($archivo);
?>
            </pre>
        </article>

        <pre>
        $phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );
        </pre>
        <p>
            El formato Unix Timestamp es el tiempo transcurrido
            en milisegundos desde el 01/01/1970
        </p>

    </main>
<?php
include '../layouts/footer.php';

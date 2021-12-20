<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    if ($nombre == ''){
        echo 'Hay algún campo vacío';
    }else {
        echo $_POST['nombre'];
        echo $_POST['email'];
        echo $_POST['telefono'];
    }
?>
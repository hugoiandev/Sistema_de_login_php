<?php
    $servidor = 'localhost';
    $dbasename = 'cadastro';
    $dbuser = 'root';
    $dbpass = '';

    $conn = mysqli_connect($servidor, $dbuser, $dbpass, $dbasename);

    if ($conn) {
    } else {
        echo 'A conexao falhou!';
    }
?>
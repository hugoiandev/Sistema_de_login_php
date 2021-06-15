<?php
    include 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, nome, email, senha FROM tusuario
            WHERE email = '$email' AND senha = '$senha'";

    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_assoc($resultado);

    if ($dados) {
        echo 'Logado com sucesso! Seja bem vindo '.$dados['nome'];
    } else {
        echo 'Usuario ou senha incorretos!';
    }
?>
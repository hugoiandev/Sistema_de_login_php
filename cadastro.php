<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = 'INSERT INTO tusuario (nome, email, senha) VALUES ($nome, $email, $senha)';

    $query = mysqli_query($conn, "INSERT INTO tusuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if ($query) {
        echo 'Cadastrado com sucesso! Clique <a href="login.html">aqui</a> para ir para tela de login';
    } else {
        echo 'Ocorreu um erro no registro dos dados!';
    }
?>
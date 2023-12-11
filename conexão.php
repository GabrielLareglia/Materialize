<?php

$servidor = 'localhost';
$login = 'root';
$senha = 'root';
$banco = 'db_sistema';

$conexao = mysqli_connect($servidor, $login, $senha, $banco);

$nome = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];


$insert = "INSERT INTO `tb_user` (`id_user`, `nm_user`, `login`, `senha`)
            VALUES (NULL, '$nome', '$email', '$password')";

$sql = mysqli_query($conexao, $insert);
?>
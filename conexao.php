<?php
// Configuração dos parâmetros da conexão
$servidor = "mariadb-server";
$usuario  = "root";
$senha = "root";
$banco = "bd_projetos";

// conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
?>
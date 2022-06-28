<?php
include("conexao.php");
$usuario = filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");
$tipo = filter_input(INPUT_POST, "tipo");
if($tipo == 1) {
    $sql = "SELECT * FROM tb_login where log_usuario = '$usuario' and log_senha = md5('$senha')";
    echo $sql;
    $pesquisar = mysqli_query($conexao, $sql);
    $cont = 0;
    while ($vetor = $pesquisar->fetch_assoc()) {
        $cont++;
    }
    if ($cont == 0) {
        echo "Dados Incorretos";
    } else {
        header("location: ../aluno");
    }
} else if ($tipo == 2) {

} else {

}


?>
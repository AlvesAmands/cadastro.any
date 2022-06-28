<?php
   include("conexao.php");

   $codigo = filter_input(INPUT_GET, 'cod');
   $sql = "DELETE FROM tb_ano where ano_codigo = $codigo";
   $executar = mysqli_query($conexao, $sql);
   header("Location: ../administrador/cadAno.php");

?>

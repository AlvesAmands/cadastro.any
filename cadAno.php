<?php
   include("conexao.php");

   $nome = filter_input(INPUT_POST, 'nome');
   $codigo = filter_input(INPUT_POST, 'codigo');
   $sql = "INSERT INTO tb_ano(ano_nome) values ('$nome')";
   if ($codigo != "") {
      $sql = "UPDATE tb_ano set ano_nome = '$nome' where ano_codigo = $codigo;";
   } else {
      $sql = "INSERT INTO tb_ano(ano_nome) values ('$nome');";
   }
   $executar = mysqli_query($conexao, $sql);
   header("Location: ../administrador/cadAno.php");
?>
<?php
   include("conexao.php");

   $codigo = filter_input(INPUT_GET, 'cod');
   $sql = "DELETE FROM tb_curso where cur_codigo = $codigo";
   $executar = mysqli_query($conexao, $sql);
   header("Location: ../administrador/cadCurso.php");

?>

<?php
    include ("../controlador/conexao.php");
    $codigo = filter_input(INPUT_GET, 'cod');
    $nome = filter_input(INPUT_GET, 'nome')

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="cursonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="p-3 mb-2 bg-secondary text-white">
        <h3>Cadastro de Curso</h3></div>
    <!-- Formulário de cadastro -->
    <div class="container">
        <div class="row">

        </div>
        <form method="POST" action="../controlador/cadcurso.php">
            <div class="row">
                <div class="col-2 py-2">
                    Código
                </div>
                <div class="col-10">
                    <input type="text" name="codigo" class="form-control" value="<?php echo $codigo; ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-2 py-2">
                    Nome
                </div>
                <div class="col-10">
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input type="submit" value="Salvar" class="btn btn-info form-control">
                </div>
                <div class="col-6">
                    <input type="reset" value="Limpar" class="btn btn-secondary form-control">
                </div>
            </div>
        </form>
    </div>
    <!-- cursos cadastrados - aqui fica o DataTable -->
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <table id="estudantes" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Código</th>
                            <th class="th-sm">Curso</th>
                            <th class="th-sm">Editar</th>
                            <th class="th-sm">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * from tb_curso;";
                        $pesquisar = mysqli_query($conexao, $sql);
                        while ($vetor = $pesquisar->fetch_assoc()) {
                          echo " <tr>
                            <td>".$vetor['cur_codigo']."</td>
                            <td> ".$vetor['cur_nome']." </td>
                            <td>
                            <a href='cadcurso.php?cod=".$vetor['cur_codigo']."&nome=".$vetor['cur_nome']."'>
                                <input type='button' value='Editar'
                                class='teste'>
                            </a>
                            </td>
                            <td>
                                <a href='../controlador/Delcurso.php?cod=".$vetor['cur_codigo']."'>
                                    <input type='button' value='Excluir'
                                    class='excluir'>
                                </a>
                            </td>
                        </tr>";
                        } 
                        ?>                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="cursonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#estudantes').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

</body>

</html>
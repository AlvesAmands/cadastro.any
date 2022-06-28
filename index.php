<?php
    include ("controlador/logar.php");
    $usuario = filter_input(INPUT_GET, 'usuario');
    $senha = filter_input(INPUT_GET, 'senha');
    $tipo = filter_input(INPUT_GET, 'tipo')

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

</head>

<body>

    <!-- Formulário de cadastro -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Entrar </h3>
            </div>
        </div>
        <form method="POST" action="controlador/logar.php">
            <div class="row">
                <div class="col-2 py-2">
                    Usuário
                </div>
                <div class="col-10">
                    <input type="text" name="Usuário" class="form-control" placeholder="E-mail, CPF, Nome de Usuário" value="<?php echo $usuario?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col-2 py-2">
                    Senha
                </div>
                <div class="col-10">
                    <input type="text" name="Senha" class="form-control" placeholder="****" value="<?php echo $senha?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col-2 py-2">
                    Tipo de Usuário
                </div>
                <div class="col-10">
                    <select name="tipo" class="form-select">
                        <option disabled selected> Selecione</option>
                        <option value=1> Aluno</option>
                        <option value=2> Administrador</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input type="submit" value="Entrar" class="btn btn-info form-control">
                </div>
                <div class="col-6">
                    <input type="reset" value="Cancelar" class="btn btn-dark form-control">
                </div>
            </div>
        </form>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html>
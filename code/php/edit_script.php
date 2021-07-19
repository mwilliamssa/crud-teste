<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edição do cadastro</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $apelido = $_POST['apelido'];
                $cpf_cnpj = $_POST['cpf_cnpj'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];
                $endereco = $_POST['endereco'];
                $numero_casa = $_POST['numero_casa'];
                $complemento_casa = $_POST['complemento_casa'];
                $nome_contato = $_POST['nome_contato'];
                $telefone_contato = $_POST['telefone_contato'];
                $email_contato = $_POST['email_contato'];

                $sql = "UPDATE `cliente` set `nome` = '$nome', `apelido` = '$apelido', `cpf_cnpj` = '$cpf_cnpj', `telefone` = '$telefone', `email` = '$email', `cidade` = '$cidade', `estado` = '$estado', `cep` = '$cep', `endereco` = '$endereco', `numero_casa` = '$numero_casa', `complemento_casa` = '$complemento_casa', `nome_contato` = '$nome_contato', `telefone_contato` = '$telefone_contato', `email_contato` = '$email_contato' WHERE id_cliente = $id ";

                if(mysqli_query($conexao, $sql)){
                    mensagem("$nome alterado com sucesso!", "success");
                }else
                    mensagem("$nome não alterado!", "danger");
            ?>
            <a href="index.php" class="btn btn-dark">Voltar</a>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

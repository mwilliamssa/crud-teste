<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Área do administrador</title>
  </head>
  <body>

    <?php
        if(isset($_POST['search'])){
            $research = $_POST['search'];
        }else{
            $research = '';
        }

        include "conexao.php";

        $sql = "SELECT * FROM cliente WHERE nome LIKE '%$research%'";

        $dados = mysqli_query($conexao, $sql);
        ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="https://id5.ams3.cdn.digitaloceanspaces.com/2018/04/id5agenciadigital.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                id5
            </a>
         </div>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                 <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                 <a class="nav-link" href="cadastro.php">Cadastro</a>
             </div>
         </div>
     </div>
    </nav>
    <table class="table table-hover">
        <thead class ="table-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($dados)){
                    $id_cliente = $row['id_cliente']; 
                    $nome = $row['nome'];
                    $apelido = $row['apelido'];
                    $cpf_cnpj = $row['cpf_cnpj'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $cidade = $row['cidade'];
                    $estado = $row['estado'];
                    $cep = $row['cep'];
                    $endereco = $row['endereco'];
                    $numero_casa = $row['numero_casa'];
                    $complemento_casa = $row['complemento_casa'];
                    $nome_contato = $row['nome_contato'];
                    $telefone_contato = $row['telefone_contato'];
                    $email_contato = $row['email_contato'];

                  echo "<tr>
                             <th scope='row'>$nome</th>
                             <td>$apelido</td>
                             <td>$telefone</td>
                             <td>$email</td>
                             <td><a href='cadastro_editado.php?id=$id_cliente' class='btn btn-dark'>Editar</a>
                                 <a href='' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#alert'
                                 onclick=" .'"'."get_data($id_cliente, '$nome')".'"'.">Excluir</a> 
                             </td> 
                        </tr>";
        }

            
    ?>

  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir dados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="drop_script.php" method="POST">
          <div class="modal-body">
              <p>tem certeza que deseja excluir os dados do cliente?</p>
              <p id="nome_cliente">
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Não</button>
              <input type="hidden" name="id" id="id_cliente" value="">
              <input type="hidden" name="nome" id="nome_cliente_1" value="">
              <input type="submit" class="btn btn-dark"value = "Sim">
          </div>
      </form>
    </div>
  </div>
</div>

<script>
  function get_data(id, nome){
    document.getElementById('nome_cliente').innerHTML = nome;
    document.getElementById('id_cliente').value = id;
  }
</script>




   
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <footer class="navbar" style="position:fixed; bottom:0; width:100%; background-color:#f16a06">
  <div class="container">
    <a class="navbar-brand" href="#">
      <div alt="" width="30" height="24">
    </a>
  </div>
</footer>
</html>
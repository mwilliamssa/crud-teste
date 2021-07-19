<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                      <a class="nav-link" href="admin.php">Dados</a>
                  </div>
              </div>
          </div>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col">
                  <div>
                      <h1>Cadastro</h1>
                  </div>
                  <div class="add">
                      <!-- FORMULARIO -->
                      <form class="form-floating" action="cadastro_script.php" method="POST">
                          <h4 style="margin-top:40px;">Dados pessoais</h4>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome" required>
                              <label for="floatingInputValue">Nome</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" placeholder="Como você gostaria de ser chamado?" name="apelido">
                              <label for="floatingInputValue">Apelido</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" placeholder="Digite seu CPF/CNPJ" name="cpf_cnpj">
                              <label for="floatingInputValue">CPF/CNPJ</label>
                          </div>
                          <div class="row g-2">
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone">
                                      <label for="floatingInputGrid">Telefone</label>
                                  </div>
                              </div>
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="email" class="form-control" placeholder="Digite seu email" name="email">
                                      <label for="floatingInputGrid">Email</label>
                                  </div>
                              </div>
                          </div>
                          <div style="margin-top:40px;">
                              <h4>Endereço</h4>
                          </div>
                          <div class="row g-2" style="margin-top: auto">
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe sua cidade" name="cidade">
                                      <label for="floatingInputGrid">Cidade</label>
                                  </div>
                              </div>
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe seu estado" name="estado">
                                      <label for="floatingInputGrid">Estado</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row g-2" style="margin-top: auto;">
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe seu cep" name="cep">
                                      <label for="floatingInputGrid">CEP</label>
                                  </div>
                              </div>
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe seu endereço" name="endereco">
                                      <label for="floatingInputGrid">Endereço</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row g-2" style="margin-top: auto;">
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe o número da sua residência" name="numero_casa">
                                      <label for="floatingInputGrid">Número</label>
                                  </div>
                              </div>
                              <div class="col-md">
                                 <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Informe o complemento do seu endereço" name="complemento_casa">
                                      <label for="floatingInputGrid">Completo</label>
                                  </div>
                              </div>
                          </div>
                          <div style="margin-top:40px;">
                              <h4>Contato</h4>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome_contato">
                              <label for="floatingInputValue">Nome</label>
                          </div>
                          <div class="row g-2" style="margin-top: auto;">
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone_contato">
                                      <label for="floatingInputGrid">Telefone</label>
                                  </div>
                              </div>
                              <div class="col-md">
                                  <div class="form-floating">
                                      <input type="email" class="form-control" placeholder="Digite seu email" name="email_contato">
                                      <label for="floatingInputGrid">Email</label>
                                  </div>
                              </div>
                              <div class="col-12" style="margin-top: 10px; height:70px;">
                              <button class="btn btn-dark" id="add-field" style="margin-bottom: auto;">Adicionar mais um contato</button>
                          </div>
                        
                    </div>
                    <!-- SCRIPT PARA ADD MAIS UM CONTATO -->
                        <script style="margin-bottom: 100px;">
                            $( "#add-field" ).click(function() {
                                $( ".add" ).append( '<div class="form-floating mb-3" style="margin-top: 10px; "> <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome_contato"> <label for="floatingInputValue">Nome</label> </div> <div class="row g-2" style="margin-top: auto;"> <div class="col-md"> <div class="form-floating"> <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone_contato"> <label for="floatingInputGrid">Telefone</label> </div> </div> <div class="col-md"> <div class="form-floating" style="margin-bottom: 70px;"> <input type="email" class="form-control" placeholder="Digite seu email" name="email_contato"> <label for="floatingInputGrid">Email</label></div> </div>' );
                            });
                        </script>
                    <div class="col-12" style="margin-top: 10px; height:100px; position:relative;">
                        <button class="btn btn-dark" type="submit" style="margin-left: 87%; height: 40px;">Enviar</input>
                    </div>
    
                        
                    </form>
                    
                    
                </div>    
            </div>
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
  <!-- RODAPÉ-->
  <footer class="navbar" style="position:fixed; bottom:0; width:100%; background-color:#f16a06">
  <div class="container">
    <a class="navbar-brand" href="#">
      <div alt="" width="30" height="24">
    </a>
  </div>
</footer>

</html>
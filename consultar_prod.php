<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Adm</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6910838e09.js" crossorigin="anonymous"></script>

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="img/logo.png" width="40" height="30" class="d-inline-block align-top" alt="">
            Clínica Dra. Carolina Vianna
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a href="logoff.php" class="nav-link ">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta Estoque
              <form class="d-flex">
                <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success mt-3" type="submit">Search</button>
              </form>
            </div>
            
            <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover table-bordered border border-primary">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Data</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">...</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Agulha</td>
                    <td>Entrada</td>
                    <td>17/01/2022 10:10</td>
                    <td>Camila Manso Vianna</td>
                    <td>20</td>
                    <td>
                      <a class='btn btn-sm btn-warning'>Edit</a> 
                      <a class='btn btn-sm btn-danger'>X</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Botox</td>
                    <td>Saída</td>
                    <td>17/01/2022 10:15</td>
                    <td>Camila Manso Vianna</td>
                    <td>3</td>
                    <td>
                      <a class='btn btn-sm btn-warning'>Edit</a> 
                      <a class='btn btn-sm btn-danger'>X</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
              
              <!-- <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div> -->
              </div>

              <div class="row mt-5">
                <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
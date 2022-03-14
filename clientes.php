<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Lista de Clientes</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap-4.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS_Forms -->
    <link href=resources/css/forms.css rel="stylessheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/bootstrap-4.1.3/site/docs/4.1/examples/product/product.css" rel="stylesheet">
  </head>

  <body>

  <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
        
        </a>
        <a class="py-2 d-none d-md-inline-block" href="http://localhost/CRUD_Keep/index.php">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="http://localhost/CRUD_Keep/clientes.php">Clientes</a>
        <a class="py-2 d-none d-md-inline-block" href="http://localhost/CRUD_Keep/empresas.php">Empresas</a>        
      </div>
    </nav>    

    <style>      
        td, th {
  padding: .7em;
  margin: 0;
  /*border: 1px solid #ccc;*/
  text-align: center;
}

th{
  /*background-color: #EEE;*/
}
td{
  font-weight:bold;
  /*background-color: #EEE;*/
}

table{
  width: 100%;
  margin-bottom : .5em;
  table-layout: fixed;
  text-align: center;
}
    </style>
    <br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

    <!-- FOOTER -->
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">Luan Gabillaud &copy; 2022</small>
        </div>       
       
        <div class="col-6 col-md">
          <h5>Tecnologias Utilizadas</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Contatos</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

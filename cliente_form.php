<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Empresas</title>

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
        form {
            margin:150px;
        }
    </style>
    <form id= form_style class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome:</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="ex: Gabriel Monteiro" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">CPF:</label>
      <input type="number" class="form-control" id="validationCustom02" placeholder="ex: 111.111.111-11" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Email:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="number" class="form-control" id="validationCustomUsername" placeholder="ex:joao@domain.com" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Insira um Email valido.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Endereço/CEP:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="11111-111" required>
      <div class="invalid-feedback">
        Por favor, informe um Endereço ou CEP valido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Telefone:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Telefone" required>
      <div class="invalid-feedback">
        Por favor, informe um telefone valido.
      </div>
    </div>   
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>

<script>
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

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

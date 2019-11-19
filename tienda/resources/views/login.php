<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarse / Iniciar sesion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">X-Mas Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </nav>

    <div class="container" style="padding-top: 5%;">
      <div class="row">
        <div class="col">
          <h1>Registrate</h1>
          <form action="Registrar" method="POST">
            <?= csrf_field()?>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="text" class="form-control" name="username" placeholder="Nombre de ususario" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <button type="submit" class="btn btn-primary">Registrarse</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col">
          <h2>Iniciar sesion</h2>
          <form method="POST" action="<?= route('Validate') ?>">
          <?= csrf_field()?>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="text" class="form-control"  name="username" placeholder="Nombre de ususario" autocomplete="off" required>
               
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <button class="btn btn-primary" >Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

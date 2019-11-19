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
    <nav class="navbar navbar-expand-lg navbar-light bg-danger text-light">
      <a class="navbar-brand text-light" href="/Home">X-Mas-Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item active">
            <a class="nav-link text-light" href="Calcetines">Socks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="Sweaters">Sweaters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="login">Sign in / login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="padding-top: 5%;">
      <div class="row">
        <div class="col">
          <h1>Registrate</h1>
          <form action="Registrar" method="post">
            <?= csrf_field()?>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="text" class="form-control" id="Username" placeholder="Nombre de ususario" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="password" class="form-control" id="Vpassword" placeholder="Verificar contraseña" required>
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
          <form>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="text" class="form-control" id="Username" placeholder="Nombre de ususario" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
              </div>
            </div>
            <a href="#">Olvide mi contraseña</a>
            <div class="form-group row">
              <div class="col-md-10">
                <button type="submit" class="btn btn-primary">Registrarse</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

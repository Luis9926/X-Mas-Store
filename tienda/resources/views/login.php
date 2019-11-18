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
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Calcetines.html">Calcetines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Suéteres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login / Sign in <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container" style="padding-top: 5%;">
      <div class="row">
        <div class="col">
          <h1>Registrate</h1>
          <form>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="email" class="form-control" id="email" placeholder="Correo" autocomplete="off" required>
              </div>
            </div>
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

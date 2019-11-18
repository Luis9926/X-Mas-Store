<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calcetin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
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
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Calcetines <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Suéteres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login / Sign in</a>
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
        <div class="col-4">
          <img src="<?= e($Calcetin['imagen'])?>" width="100%;" height="auto;" alt="Error al cargar imagen">
        </div>
        <div class="col-8">
          <h1><?= e($Calcetin['nombre'])?></h1>
          <h3>Descripcion</h3>
          <h6><?= e($Calcetin['descripcion'])?></h6>
          <h3>Material</h3>
          <h6><?= e($Calcetin['material'])?></h6>
          <h3>Material</h3>
          <h6><?= e($Calcetin['nombre'])?></h6>
          <h3>Tipo de lavado</h3>
          <h6><?= e($Calcetin['tipo_lavado'])?></h6>
          <h3>Pares disponibles</h3>
          <h6><?= e($Calcetin['cantidad_pares'])?></h6>
          <h3>Tamaños</h3>
          <h6><?= e($Calcetin['tamanos'])?></h6>
          <button class="" type="button" name="button">Comprar</button>
        </div>
      </div>
    </div>
  </body>
</html>
